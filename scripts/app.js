window.onload = function() {

    const app = Vue.createApp({
        data() {
            return {
                // [ form setting ]
                name: '',
                email: '',
                message: '',
                password: '',
                password_check: '',
                base_form_submit: false,
                full_form_submit: false,
                entrance_form_submit: false,
                reg_form_submit: false,
    
                // [ modal settings ]
                modal_open: false
            }
        },
    
        methods: {
            //@ set > submit button state
            checkBaseForm() {
                if( this.name !== '' && this.email !== '' && this.email.match(/^[^@]+@[^@]+\.[^@]+$/) ) {
                    this.base_form_submit = true;
                } else { this.base_form_submit = false; }
            },
            checkEntranceForm() {
                if( this.email !== '' && this.email.match(/^[^@]+@[^@]+\.[^@]+$/) && this.password !== '' ) {
                    this.entrance_form_submit = true;
                } else { this.entrance_form_submit = false; }
            },
            checkFullForm() {
                if ( 
                    this.name !== '' && 
                    this.email !== '' && 
                    this.email.match(/^[^@]+@[^@]+\.[^@]+$/)  &&
                    this.message !== ''
                ) {
                    this.full_form_submit = true;
                } else { this.full_form_submit = false; }
            },
            checkRegForm() {
                if ( 
                    this.name !== '' && 
                    this.email !== '' && 
                    this.email.match(/^[^@]+@[^@]+\.[^@]+$/)  &&
                    this.password !== '' &&
                    this.password_check !== '' &&
                    this.password_check === this.password
                ) {
                    this.reg_form_submit = true;
                } else { this.reg_form_submit = false; }
            },
    
            //@ open > modal
            openModal() {
                this.modal_open = true;
            },
            //@ hide > modal
            hideModal() {
                this.modal_open = false;
            },
        },
    
    });
    
    app.mount('#app');    

}
