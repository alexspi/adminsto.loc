<div class="popup popup--small" id="successMsg">
    
    <p class="popup__title">Спасибо</p>
    <p class="popup__desc">Наш менеджер <br> скоро с вами свяжется</p>

</div>

<div class="popup popup--small" id="popup-free-install">
    
    <p class="popup__title">Заполните форму</p>
    <p class="popup__desc">И получите бесплатную <br> настройку рекламы</p>
    <form class="popup__form form" id="SubmitForm">
        <input class="form__input" type="text" name="name" id="InputName" placeholder="Имя">
        <span class="text-danger" id="nameErrorMsg"></span>
        <input class="form__input" type="tel" name="phone" id="InputMobile" placeholder="Телефон">
        <span class="text-danger" id="mobileErrorMsg"></span>
        <button class="btn btn--purple form__submit" type="submit">
            <span>Получить бесплатную настройку</span>
        </button>
    </form>
</div>
<div class="popup popup--small" id="popup-free-consult">
    <p class="popup__title">Заполните форму</p>
    <p class="popup__desc">Чтобы записаться на бесплатную консультацию к ведущему маркетологу нашей компании</p>
    <form class="popup__form form" id="SubmitForm1">
        <input class="form__input" type="text" name="name" id="InputName1" placeholder="Имя">
                <span class="text-danger" id="nameErrorMsg1"></span>
        <input class="form__input" type="tel" name="phone" id="InputMobile1" placeholder="Телефон">
                <span class="text-danger" id="mobileErrorMsg1"></span>
        <button class="btn btn--purple form__submit" type="submit">
            <span>Записаться на консультацию</span>
        </button>
    </form>
</div>
<div class="popup popup--small" id="popup-manager">
    <p class="popup__title">Заполните форму</p>
    <p class="popup__desc">Чтобы связаться с менеджером нашей компании</p>
    <form class="popup__form form" id="SubmitForm2">
        <input class="form__input" type="text" name="name" id="InputName2" placeholder="Имя">
        <span class="text-danger" id="nameErrorMsg2"></span>
        <input class="form__input" type="tel" name="phone" id="InputMobile2" placeholder="Телефон">
        <span class="text-danger" id="mobileErrorMsg2"></span>
        <button class="btn btn--purple form__submit" type="submit">
            <span>Связаться с менеджером</span>
        </button>
    </form>
</div>
<div class="popup popup--large" id="popup-personal-analysis">
    <div class="popup__row">
        <div class="popup__left">
            <p class="popup__title">Заполните форму
            <p class="popup__desc">Чтобы записаться на бесплатную консультацию к ведущему маркетологу нашей компании</p>
            <form class="popup__form form" id="SubmitForm3">
                <input class="form__input" type="text" name="name" id="InputName3" placeholder="Имя">
                <span class="text-danger" id="nameErrorMsg3"></span>
                <input class="form__input" type="tel" name="phone" id="InputMobile3" placeholder="Телефон">
                <span class="text-danger" id="mobileErrorMsg3"></span>
                <button class="btn btn--purple form__submit" type="submit">
                    <span>Записаться на консультацию</span>
                </button>
            </form>
            </p>
        </div>
        <div class="popup__right"><img class="popup__right-img"
                                       src="<?php echo e(asset('assets/front/img/free-consult-img.png')); ?>"></div>
    </div>
</div>

<div class="popup popup--video" id="popup-video">
    <div class="popup__row">
        <video
                id="my-video"
                class="video-js"
                controls
                preload="auto"
                width="auto"
                height="640"
                data-setup="{}"
        >
            <source src="<?php echo e(asset('assets/front/video/profstroi.mp4')); ?>" type="video/mp4"/>
            
            
            
            
            
            
            
            
        </video>
    </div>
</div>

<?php $__env->startSection('sourcebuster'); ?>

    <script type="text/javascript">
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
                    "_token": "<?php echo e(csrf_token()); ?>",
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
                    "_token": "<?php echo e(csrf_token()); ?>",
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
                    "_token": "<?php echo e(csrf_token()); ?>",
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
                    "_token": "<?php echo e(csrf_token()); ?>",
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
                    "_token": "<?php echo e(csrf_token()); ?>",
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
                    $('#nameErrorMsg4').text(response.responseJSON.errors.name);
                    $('#mobileErrorMsg4').text(response.responseJSON.errors.mobile);
                    console.log(response.responseJSON.errors.mobile);
                },
            });
        });

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </script>

<?php $__env->stopSection(); ?><?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/front/popup.blade.php ENDPATH**/ ?>