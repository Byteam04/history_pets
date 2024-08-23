<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RegistroPropietarioController;
use App\Http\Controllers\Admin\RegistroMascotaController;
use App\Http\Controllers\Admin\ConfiguracionEspecieController;
use App\Http\Controllers\Admin\ConfiguracionEmpresaController;
use App\Http\Controllers\Admin\ConfiguracionRazaController;
use App\Http\Controllers\Admin\ConfiguracionPelajeController;
use App\Http\Controllers\Admin\ConfiguracionColorController;
use App\Http\Controllers\Admin\ConfiguracionTipoIdentificacionController;
use App\Http\Controllers\Admin\ConfiguracionPaisController;
use App\Http\Controllers\Admin\ConfiguracionDepartamentoController;
use App\Http\Controllers\Admin\ConfiguracionMunicipioController;
use App\Http\Controllers\Admin\CitaConsultaController;
use App\Http\Controllers\Admin\CitaAsignacionController;
use App\Http\Controllers\Admin\HistoriaController;
use App\Http\Controllers\Admin\AccesoRolController;
use App\Http\Controllers\Admin\AccesoPermisoController;
use App\Http\Controllers\Admin\AccesoEmpresaUsuarioController;
use App\Http\Controllers\Admin\AccesoReporteController;
use App\Http\Controllers\Admin\AccesoUsuarioController;


Route::get('', [HomeController::class, 'index'])->name('admin.home')->middleware('auth');

Route::resource('propietarios', RegistroPropietarioController::class)->except('show')->names('admin.registros.propietarios')->middleware('auth');
Route::resource('mascotas', RegistroMascotaController::class)->except('show')->names('admin.registros.mascotas')->middleware('auth');
Route::resource('tipo_identificaciones', ConfiguracionTipoIdentificacionController::class)->except('show')->names('admin.configuraciones.tipo_identificaciones')->middleware('auth');
Route::resource('color', ConfiguracionColorController::class)->except('show')->names('admin.configuraciones.colores')->middleware('auth');
Route::resource('pelaje', ConfiguracionPelajeController::class)->except('show')->names('admin.configuraciones.pelajes')->middleware('auth');
Route::resource('raza', ConfiguracionRazaController::class)->except('show')->names('admin.configuraciones.razas')->middleware('auth');
Route::resource('especie', ConfiguracionEspecieController::class)->except('show')->names('admin.configuraciones.especies')->middleware('auth');
Route::resource('empresa', ConfiguracionEmpresaController::class)->except('show')->names('admin.configuraciones.empresas')->middleware('auth');
Route::resource('pais', ConfiguracionPaisController::class)->except('show')->names('admin.configuraciones.paises')->middleware('auth');
Route::resource('departamento', ConfiguracionDepartamentoController::class)->except('show')->names('admin.configuraciones.departamentos')->middleware('auth');
Route::resource('municipio', ConfiguracionMunicipioController::class)->except('show')->names('admin.configuraciones.municipios')->middleware('auth');
Route::resource('asignacion', CitaAsignacionController::class)->except('show')->names('admin.citas.asignaciones')->middleware('auth');
Route::resource('consulta', CitaConsultaController::class)->except('show')->names('admin.citas.consultas')->middleware('auth');
Route::resource('rol', AccesoRolController::class)->except('show')->names('admin.accesos.roles')->middleware('auth');
Route::resource('permiso', AccesoPermisoController::class)->except('show')->names('admin.accesos.permisos')->middleware('auth');
Route::resource('empresa_usuarios', AccesoEmpresaUsuarioController::class)->except('show')->names('admin.accesos.empresa_usuarios')->middleware('auth');
Route::resource('reporte', AccesoReporteController::class)->except('show')->names('admin.accesos.reportes')->middleware('auth');
Route::resource('historia', HistoriaController::class)->except('show')->names('admin.historias_clinicas.historias')->middleware('auth');

//Route::resource('usuario', AccesoUsuarioController::class)->except('show')->names('admin.accesos.usuarios')->middleware('auth');
Route::get('users/{user}/files', [AccesoUsuarioController::class, 'files'])->name('admin.accesos.usuarios.files');
Route::put('users/{user}', [AccesoUsuarioController::class, 'update'])->name('admin.accesos.usuarios.update');



Route::get('Historia-Clinica', [HistoriaController::class, 'index'])->name('admin.historias_clinicas.historias.index');