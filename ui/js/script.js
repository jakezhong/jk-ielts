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
            var expanded = false;
            $(toggle).on("click", function() {
                var self = this;
                var menu = $(".mobile-menu-container");
                expanded = !expanded;
                $(self).attr("aria-expanded", expanded);
                $(menu).stop().slideToggle(300);
            });
        },
        mobileDropdown: function() {
            var item = $('#mobile-menu .menu-item-has-children button');
            $(item).each(function() {
                var expanded = false;
                var self = this;
                $(self).on("click", function() {
                    var self = this;
                    var menu = $(self).next("ul");
                    expanded = !expanded;
                    $(self).attr("aria-expanded", expanded);
                    $(menu).stop().slideToggle(300);
                });
            });
        }
    }
    header.dropdown();
    header.mobileToggle();
    header.mobileDropdown();
    
    jQuery(function($){
        $(".report-form").submit(function(e) {
            e.preventDefault();
            console.log('works');
            var formData = $('#listening-form').serialize();
            console.table(formData);
            $.ajax({
                dataType: "json",
                type: "POST",
                data: formData,
                url: "https://ielts.jakezhong.com/wp-admin/admin-ajax.php",
                success: function(result) {
                    console.log('data sent!');
                    console.log('sent to: ' + templateDir + loadUrl );
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }                       
            });
        });
    });
});

var app = new Vue({
    el: '#app',
    data: {
        form: {
            name: '',
            amount: null,
            completion: null,
            s1: null,
            s2: null,
            s3: null,
            s4: null,
            p1: null,
            p2: null,
            p3: null,
            right: null,
            satisfaction: null,
            review: null,
            problems: null,
            questions: '',
            permalink: '',
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
        },
        onReset(evt) {
            evt.preventDefault()
            this.form.name = ''
            this.form.amount = null
            this.form.completion = null
            this.form.s1 = null
            this.form.s2 = null
            this.form.s3 = null
            this.form.s4 = null
            this.form.p1 = null
            this.form.p2 = null
            this.form.p3 = null
            this.form.right = null
            this.form.satisfaction = null
            this.form.review = null
            this.form.problems = null
            this.form.questions = ''
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
        },
        calcRight: function(nums) {
            var sum = 0;
            for( var i = 0; i < nums.length; i++ ) {
                if( nums[i] == null ) {
                    return;
                }
                sum += nums[i];
            }
            this.form.right = sum;
            return sum;
        },
        calcScore: function() {
            switch(this.form.right) {
                case 0:
                    this.score = 0;
                    break;
                case 1:
                    this.score = 1;
                    break;
                case 2:
                    this.score = 2;
                    break;
                case 3:
                    this.score = 2.5;
                    break;
                case 4:
                    this.score = 3;
                    break;
                case 5:
                    this.score = 3;
                    break;
                case 6:
                    this.score = 3.5;
                    break;
                case 7:
                    this.score = 3.5;
                    break;
                case 8:
                    this.score = 3.5;
                    break;
                case 9:
                    this.score = 3.5;
                    break;
                case 10:
                    this.score = 4;
                    break;
                case 11:
                    this.score = 4;
                    break;
                case 12:
                    this.score = 4;
                    break;
                case 13:
                    this.score = 4.5;
                    break;
                case 14:
                    this.score = 4.5;
                    break;
                case 15:
                    this.score = 4.5;
                    break;
                case 16:
                    this.score = 5;
                    break;
                case 17:
                    this.score = 5;
                    break;
                case 18:
                    this.score = 5;
                    break;
                case 19:
                    this.score = 5;
                    break;
                case 20:
                    this.score = 5.5;
                    break;
                case 21:
                    this.score = 5.5;
                    break;
                case 22:
                    this.score = 5.5;
                    break;
                case 23:
                    this.score = 6;
                    break;
                case 24:
                    this.score = 6;
                    break;
                case 25:
                    this.score = 6;
                    break;
                case 26:
                    this.score = 6;
                    break;
                case 27:
                    this.score = 6.5;
                    break;
                case 28:
                    this.score = 6.5;
                    break;
                case 29:
                    this.score = 6.5;
                    break;
                case 30:
                    this.score = 7;
                    break;
                case 31:
                    this.score = 7;
                    break;
                case 32:
                    this.score = 7;
                    break;
                case 33:
                    this.score = 7.5;
                    break;
                case 34:
                    this.score = 7.5;
                    break;
                case 35:
                    this.score = 8;
                    break;
                case 36:
                    this.score = 8;
                    break;
                case 37:
                    this.score = 8.5;
                    break;
                case 38:
                    this.score = 8.5;
                    break;
                case 39:
                    this.score = 9;
                    break;
                case 40:
                    this.score = 9;
                    break;
                default:
                    this.score = null;
            }
            return this.form.score;
        }
    },
    computed: {
    },
});