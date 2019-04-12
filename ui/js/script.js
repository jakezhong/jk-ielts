/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */
jQuery(function($){
    var header = {
        dropdown: function() {
            var $item = $('.menu-item-has-children');
            $('.menu-item-has-children').hover(function() {
                $(this).find('ul').stop().slideDown(300);
            }, function() {
                $(this).find('ul').stop().slideUp(300);
            });
        }
    }
    header.dropdown();
});

var app = new Vue({
    el: '#app',
    data: {
        form: {
            name: '',
            times: '',
            completion: Boolean,
            s1: [],
            s2: [],
            s3: [],
            s4: [],
            satisfaction: '',
            wrongQuestions: [],
            review: Boolean,
            problems: [],
            questions: ''
        }
    },
    methods: {
        onSubmit(evt) {
            evt.preventDefault()
            alert(JSON.stringify(this.form))
        },
        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.email = ''
            this.form.name = ''
            this.form.food = null
            this.form.checked = []
            // Trick to reset/clear native browser form validation state
            this.show = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    },
    computed: {

    }
});