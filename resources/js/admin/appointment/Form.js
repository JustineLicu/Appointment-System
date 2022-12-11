import AppForm from '../app-components/Form/AppForm';

Vue.component('appointment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                patient_id:  '' ,
                dateTime:  '' ,
                purpose:  '' ,
                status:  '' ,
                
            }
        }
    }

});