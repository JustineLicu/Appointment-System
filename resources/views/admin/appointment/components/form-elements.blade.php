<div class="form-group row align-items-center" :class="{'has-danger': errors.has('patient_id'), 'has-success': fields.patient_id && fields.patient_id.valid }">
    <label for="patient_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.appointment.columns.patient_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.patient_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('patient_id'), 'form-control-success': fields.patient_id && fields.patient_id.valid}" id="patient_id" name="patient_id" placeholder="{{ trans('admin.appointment.columns.patient_id') }}">
        <div v-if="errors.has('patient_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('patient_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('dateTime'), 'has-success': fields.dateTime && fields.dateTime.valid }">
    <label for="dateTime" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.appointment.columns.dateTime') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.dateTime" :config="datetimePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('dateTime'), 'form-control-success': fields.dateTime && fields.dateTime.valid}" id="dateTime" name="dateTime" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('dateTime')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('dateTime') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('purpose'), 'has-success': fields.purpose && fields.purpose.valid }">
    <label for="purpose" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.appointment.columns.purpose') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.purpose" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('purpose'), 'form-control-success': fields.purpose && fields.purpose.valid}" id="purpose" name="purpose" placeholder="{{ trans('admin.appointment.columns.purpose') }}">
        <div v-if="errors.has('purpose')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('purpose') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.appointment.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.appointment.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


