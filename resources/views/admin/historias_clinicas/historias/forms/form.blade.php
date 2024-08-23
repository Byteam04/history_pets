<ul class="nav nav-tabs nav-justified" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="justified-tab-0" data-bs-toggle="tab" href="#justified-tabpanel-0" role="tab" aria-controls="justified-tabpanel-0" aria-selected="true"> Información </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="justified-tab-1" data-bs-toggle="tab" href="#justified-tabpanel-1" role="tab" aria-controls="justified-tabpanel-1" aria-selected="false"> Anamnesis </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="justified-tab-2" data-bs-toggle="tab" href="#justified-tabpanel-2" role="tab" aria-controls="justified-tabpanel-2" aria-selected="false"> Examen Físico </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="justified-tab-3" data-bs-toggle="tab" href="#justified-tabpanel-3" role="tab" aria-controls="justified-tabpanel-3" aria-selected="false"> Diagnósticos </a>
  </li>
</ul>
<div class="tab-content pt-3" id="tab-content">
  <div class="tab-pane active" id="justified-tabpanel-0" role="tabpanel" aria-labelledby="justified-tab-0">
	@include('admin.historias_clinicas.historias.forms.form_propietario')
    @include('admin.historias_clinicas.historias.forms.form_mascota')
  </div>
  <div class="tab-pane" id="justified-tabpanel-1" role="tabpanel" aria-labelledby="justified-tab-1">
    @include('admin.historias_clinicas.historias.forms.form_anamnesis')
  </div>
  <div class="tab-pane" id="justified-tabpanel-2" role="tabpanel" aria-labelledby="justified-tab-2">
    @include('admin.historias_clinicas.historias.forms.form_examen_fisico')
  </div>
  <div class="tab-pane" id="justified-tabpanel-3" role="tabpanel" aria-labelledby="justified-tab-3">
    @include('admin.historias_clinicas.historias.forms.form_diagnosticos')
  </div>
</div>