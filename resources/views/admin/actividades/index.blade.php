@extends('layouts/layoutMaster')

@section('title', 'Academy Dashboard - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/typeahead-js/typeahead.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.scss',
  'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.scss',
  'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.scss',
  'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.scss',
  'resources/assets/vendor/libs/pickr/pickr-themes.scss'
  ])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/typeahead-js/typeahead.js',
  'resources/assets/vendor/libs/tagify/tagify.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/autosize/autosize.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js',
  'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js',
  'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js',
  'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js',
  'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js',
  'resources/assets/vendor/libs/pickr/pickr.js'
  ])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/form-validation.js',
  'resources/assets/js/forms-extras.js',
  'resources/assets/js/forms-pickers.js'
])
@endsection


@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Actividades /</span> Nueva Actividad
</h4>

<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form id="formValidationExamples" class="row g-3" action="/upload" enctype="multipart/form-data">
            @csrf
            <!-- Account Details -->
            <div class="col-12">
              <h6>1. Detalles de la Actividad</h6>
              <hr class="mt-0" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="formValidationName">Nombre</label>
              <input type="text" id="formValidationName" class="form-control" placeholder="John Doe" name="nombre" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="formValidationEmail">Label</label>
              <smal style="font-size: 11px;">(E.g. Una etiqueta que describa tu actividad: Salud Mental, si pondras mas de una, separar por coma)</small>
              <input class="form-control" type="email" id="formValidationEmail" name="formValidationEmail" placeholder="label" />
            </div>
  
            <div class="col-md-6">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationShortDesc">Descripcion Corta</label>
                <div class="input-group input-group-merge">
                  <input class="form-control" type="email" id="formValidationShortDesc" name="short_desc" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationShortDesc">Descripcion Corta</label>
                <textarea id="autosize-demo" rows="3" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-password-toggle">
                <label for="flatpickr-datetime" class="form-label">Datetime Picker</label>
                <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM" id="flatpickr-datetime" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-password-toggle">
                <label class="form-label" for="formValidationShortDesc">Archivos</label>
                <div class="input-group input-group-merge">
                  <input class="form-control" type="file" id="formValidationShortDesc" multiple name="archivos" />
                </div>
              </div>
            </div>
  
  
            <!-- Personal Info -->
  
            <div class="col-12">
              <h6 class="mt-2">2. Personal Info</h6>
              <hr class="mt-0" />
            </div>
  
            <div class="col-md-6">
              <label for="formValidationº" class="form-label">Profile Pic</label>
              <input class="form-control" type="file" id="formValidationFile" name="formValidationFile">
            </div>
            <div class="col-md-6">
              <label class="form-label" for="formValidationDob">DOB</label>
              <input type="text" class="form-control flatpickr-validation" name="formValidationDob" id="formValidationDob" required />
            </div>
  
            <div class="col-md-6">
              <label class="form-label" for="formValidationSelect2">Country</label>
              <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Mexico">Mexico</option>
                <option value="Philippines">Philippines</option>
                <option value="Russia">Russian Federation</option>
                <option value="South Africa">South Africa</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="formValidationLang">Languages</label>
              <input type="text" value="" class="form-control" name="formValidationLang" id="formValidationLang" />
            </div>
  
            <div class="col-md-6">
              <label class="form-label" for="formValidationTech">Tech</label>
              <input class="form-control typeahead" type="text" id="formValidationTech" name="formValidationTech" autocomplete="off" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="formValidationHobbies">Hobbies</label>
              <select class="selectpicker hobbies-select w-100" id="formValidationHobbies" data-style="btn-default" data-icon-base="ti" data-tick-icon="ti-check text-white" name="formValidationHobbies" multiple>
                <option>Sports</option>
                <option>Movies</option>
                <option>Books</option>
              </select>
            </div>
  
            <div class="col-md-6">
              <label class="form-label" for="formValidationBio">Bio</label>
              <textarea class="form-control" id="formValidationBio" name="formValidationBio" rows="3"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label">Gender</label>
              <div class="form-check custom mb-2">
                <input type="radio" id="formValidationGender" name="formValidationGender" class="form-check-input" checked/>
                <label class="form-check-label" for="formValidationGender">Male</label>
              </div>
  
              <div class="form-check custom">
                <input type="radio" id="formValidationGender2" name="formValidationGender" class="form-check-input" />
                <label class="form-check-label" for="formValidationGender2">Female</label>
              </div>
            </div>
  
  
            <!-- Choose Your Plan -->
  
            <div class="col-12">
              <h6 class="mt-2">3. Choose Your Plan</h6>
              <hr class="mt-0" />
            </div>
            <div class="row gy-3 mt-0">
              <div class="col-xl-3 col-md-5 col-sm-6 col-12">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="basicPlanMain1">
                    <span class="custom-option-body">
                      <i class="ti ti-brand-telegram"></i>
                      <span class="custom-option-title"> Starter </span>
                      <small> Get 5gb of space and 1 team member. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain1" checked />
                  </label>
                </div>
              </div>
              <div class="col-xl-3 col-md-5 col-sm-6 col-12">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="basicPlanMain2">
                    <span class="custom-option-body">
                      <i class="ti ti-users"></i>
                      <span class="custom-option-title"> Personal </span>
                      <small> Get 15gb of space and 5 team member. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain2" />
                  </label>
                </div>
              </div>
              <div class="col-xl-3 col-md-5 col-sm-6 col-12">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="basicPlanMain3">
                    <span class="custom-option-body">
                      <i class="ti ti-crown"></i>
                      <span class="custom-option-title"> Premium </span>
                      <small> Get 25gb of space and 15 members. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain3" />
                  </label>
                </div>
              </div>
            </div>
  
            <div class="col-12">
              <label class="switch switch-primary">
                <input type="checkbox" class="switch-input" name="formValidationSwitch" />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Send me related emails</span>
              </label>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formValidationCheckbox" name="formValidationCheckbox" />
                <label class="form-check-label" for="formValidationCheckbox">Agree to our terms and conditions</label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /FormValidation -->
  </div>

@endsection
