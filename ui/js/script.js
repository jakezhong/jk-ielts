/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */
jQuery(function($){
    var header = {
        dropdown: function() {
            var item = $('#main-menu .menu-item-has-children');
            $(item).hover(function() {
                $(this).find('ul').stop().slideDown(300);
            }, function() {
                $(this).find('ul').stop().slideUp(300);
            });
        },
        mobileToggle: function() {
            var toggle = $("#mobile-menu-toggle");
            var expanded;
            $(toggle).on("click", function() {
                var self = this;
                var menu = $(".mobile-menu-container");
                expanded = !expanded;
                $(self).attr("aria-expanded", expanded);
                $(menu).stop().slideToggle(300);
            });
        }
    }
    header.dropdown();
    header.mobileToggle();
});

var app = new Vue({
    el: '#app',
    data: {
        form: {
            name: '',
            times: null,
            completion: null,
            result: '',
            s1: null,
            s2: null,
            s3: null,
            s4: null,
            satisfaction: null,
            wrong: null,
            review: null,
            problems: null,
            questions: '',
        },
        finished: [
            { text: '请选择', value: null },
            { text: '已完成', value: true },
            { text: '未完成', value: false }
        ],
        satisfaction: [
            { text: '请选择', value: null },
            { text: '超棒', value: 'good' },
            { text: '满意', value: 'ok' },
            { text: '不满意', value: 'bad' }
        ]
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
        },
        addClass: function(original) {
            var classes = {}
            classes[original] = true
            return classes
        },
        questionsRange: function(start, end, first) {
            var range = [];
            if ( first !== '' ) {
                range.push(
                    { text: first, value: null }
                )
            }
            for ( var i = start; i <= end; i++ ) {
                range.push(
                    { text: `${i}`, value: i }
                );
            }
            return range;
        }
    },
    computed: {
    }
});