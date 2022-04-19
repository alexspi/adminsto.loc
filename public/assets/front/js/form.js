sbjs.init({
    domain: '8uglov.ru',
    lifetime: 3,

});
let name;
let mobile;
let type_traffic = sbjs.get.current.typ;
let utm_source = sbjs.get.current.src;
let utm_medium = sbjs.get.current.mdm;
let utm_campaign = sbjs.get.current.cmp;
let utm_content = sbjs.get.current.cnt;
let utm_term = sbjs.get.current.trm;
let current_add = sbjs.get.current_add.fd;

$('#SubmitForm').on('submit', function (e) {
    e.preventDefault();
    name = $('#InputName').val();
    mobile = $('#InputMobile').val();

    $.ajax({
        url: "/submit-form",
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            name: name,
            mobile: mobile,
            type_traffic: type_traffic,
            utm_source: utm_source,
            utm_medium: utm_medium,
            utm_campaign: utm_campaign,
            utm_content: utm_content,
            utm_term: utm_term,
            current_add: current_add,
        },
        success: function (response) {
            $.fancybox.close({
                src  : '#SubmitForm',
            });
            $.fancybox.open({
                src  : '#successMsg',
                type : 'inline',
            });
            console.log(response);
        },
        error: function (response) {
            $('#nameErrorMsg').text(response.responseJSON.errors.name);
            $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
            console.log(response.responseJSON.errors.mobile);
        },
    });
});
$('#SubmitForm1').on('submit', function (e) {
    e.preventDefault();
    name = $('#InputName1').val();
    mobile = $('#InputMobile1').val();
    $.ajax({
        url: "/submit-form",
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            name: name,
            mobile: mobile,
            type_traffic: type_traffic,
            utm_source: utm_source,
            utm_medium: utm_medium,
            utm_campaign: utm_campaign,
            utm_content: utm_content,
            utm_term: utm_term,
            current_add: current_add,
        },
        success: function (response) {
            $.fancybox.close({
                src  : '#SubmitForm1',
            });
            $.fancybox.open({
                src  : '#successMsg',
                type : 'inline',
            });
            console.log(response);
        },
        error: function (response) {
            $('#nameErrorMsg1').text(response.responseJSON.errors.name);
            $('#mobileErrorMsg1').text(response.responseJSON.errors.mobile);
            console.log(response.responseJSON.errors.mobile);
        },
    });
});
$('#SubmitForm2').on('submit', function (e) {
    e.preventDefault();
    name = $('#InputName2').val();
    mobile = $('#InputMobile2').val();
    $.ajax({
        url: "/submit-form",
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            name: name,
            mobile: mobile,
            type_traffic: type_traffic,
            utm_source: utm_source,
            utm_medium: utm_medium,
            utm_campaign: utm_campaign,
            utm_content: utm_content,
            utm_term: utm_term,
            current_add: current_add,
        },
        success: function (response) {
            $.fancybox.close({
                src  : '#SubmitForm2',
            });
            $.fancybox.open({
                src  : '#successMsg',
                type : 'inline',
            });
            console.log(response);
        },
        error: function (response) {
            $('#nameErrorMsg2').text(response.responseJSON.errors.name);
            $('#mobileErrorMsg2').text(response.responseJSON.errors.mobile);
            console.log(response.responseJSON.errors.mobile);
        },
    });
});
$('#SubmitForm3').on('submit', function (e) {
    e.preventDefault();
    name = $('#InputName3').val();
    mobile = $('#InputMobile3').val();
    $.ajax({
        url: "/submit-form",
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            name: name,
            mobile: mobile,
            type_traffic: type_traffic,
            utm_source: utm_source,
            utm_medium: utm_medium,
            utm_campaign: utm_campaign,
            utm_content: utm_content,
            utm_term: utm_term,
            current_add: current_add,
        },
        success: function (response) {
            $.fancybox.close({
                src  : '#SubmitForm3',
            });
            $.fancybox.open({
                src  : '#successMsg',
                type : 'inline',
            });
            console.log(response);
        },
        error: function (response) {
            $('#nameErrorMsg3').text(response.responseJSON.errors.name);
            $('#mobileErrorMsg3').text(response.responseJSON.errors.mobile);
            console.log(response.responseJSON.errors.mobile);
        },
    });
});
$('#SubmitForm4').on('submit', function (e) {
    e.preventDefault();
    name = $('#InputName4').val();
    mobile = $('#InputMobile4').val();
    $.ajax({
        url: "/submit-form",
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            name: name,
            mobile: mobile,
            type_traffic: type_traffic,
            utm_source: utm_source,
            utm_medium: utm_medium,
            utm_campaign: utm_campaign,
            utm_content: utm_content,
            utm_term: utm_term,
            current_add: current_add,
        },
        success: function (response) {
            $.fancybox.close({
                src  : '#SubmitForm4',
            });
            $.fancybox.open({
                src  : '#successMsg',
                type : 'inline',
            });
            console.log(response);
        },
        error: function (response) {
            $('#nameErrorMsg4').text(response.responseJSON.errors.name);
            $('#mobileErrorMsg4').text(response.responseJSON.errors.mobile);
            console.log(response.responseJSON.errors.mobile);
        },
    });
});