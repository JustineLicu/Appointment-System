import AppForm from '../app-components/Form/AppForm';

Vue.component('patient-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                mobile_number:  '' ,
                
            }
        }
    }

});