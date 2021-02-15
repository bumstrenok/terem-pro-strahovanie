<?php

use Terem\AppBundle\Enum\Form;
use Terem\AppBundle\Enum\View;
use Terem\AppBundle\Tools\Globals;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->SetTitle('Услуги страхования');
$APPLICATION->SetPageProperty('title', 'Услуги страхования в Теремъ-финанс');
?>
<!-- <section class="home banner-top-padding">
    <div class="wrapper home-title-wrapper">
        <h1> Услуги страхования</h1>
    </div>
</section> -->
<link href="style_strahovanie.css" type="text/css" rel="stylesheet">
<section class="insurance">
    <div class="wrapper">
        <div class="insurance-content l-clear">
            <div class="insurance-about">
                <p class="f-link-mobile hidden"><a class="f-link" href="/kredit/">Отдел «Теремъ-финанс»</a></p>
                <p>Страхование в «Теремъ-финанс» - надежная защита имущества </p>
                <p>Мы&nbsp;сотрудничаем с&nbsp;5&nbsp;ведущими страховыми компаниями, поэтому у&nbsp;вас всегда есть
                    возможность выбрать наиболее выгодные условия страхования.</p>
                <p>Получите выгодные индивидуальные условия на страхование при строительстве объекта.</p>
                <button is="popup-toggle" data-id="REQUEST_BACK_CALL_STRAHOVANIE-popup" aria-haspopup="true" aria-expanded="false">Узнайте стоимость полиса для<span> своего дома</button>
                <div class="applic-phone applic-phone-mobile hidden">
                    <a class="callback-tel callback-tel-icon tel"
                        href="tel:+74954610110"><span>+7&nbsp;(495)&nbsp;461-01-10</span></a>
                    <small class="callback-tel-descr">Или закажите <button is="popup-toggle"
                            data-id="REQUEST_BACK_CALL-popup" aria-haspopup="true" aria-expanded="false">обратный
                            звонок</button></small>
                </div>
            </div>
            <div class="insurance-callback">
                <p><a class="f-link" href="/kredit/">Отдел «Теремъ-финанс»</a></p>
                <strong class="callback-text">Свяжитесь с вашим<br>персональным<br>менеджером</strong>
                <strong class="callback-tel tel"><a
                        href="tel:+74954610110"><span>+7&nbsp;(495)&nbsp;461-01-10</span></a></strong>
                <p>Или закажите:</p>
                <div class="btn-wrapper">
                    <button class="button callback-tel-btn" is="popup-toggle" data-id="REQUEST_BACK_CALL-popup"
                        aria-haspopup="true" aria-expanded="false">Обратный звонок</button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper no-border-wrapper">
        <div class="insurance-banner">
            <p><span>Срок страхования –</span><span>12 месяцев</span> с даты полного завершения строительства объекта и
                сдачи его в эксплуатацию</p>
        </div>
    </div>
    <div class="wrapper no-border-wrapper">
        <img class="insurance-banner-pic hidden" src="img/Bitmap/Bitmap-mobile.png" alt="баннер">
        <img class="insurance-banner-logo-pic hidden" src="img/combined-icons/logo-mob.png" alt="баннер">
        <p class="insurance-banner-text-mob hidden"><span>Срок страхования –</span> <span>12 месяцев</span> с даты
            полного завершения строительства объекта и сдачи его в эксплуатацию.</p>
    </div>
</section>
<section class="partners-sec">
    <div class="wrapper">
        <div class="i-title j-trigger"> Мы работаем с 5 ведущими страховыми компаниями</div>
        <div class="partners-content">
            <accordeon-component>
                <div class="partners-button-container container uncut l-col-3 j-trigger">
                    <div class="partners item">
                        <div class="partners-btn button-item-js" data-id="vsk">
                            <div class="partners-img"><img src="img/companies/vsk.png" alt="Страховой Дом ВСК">
                            </div>
                            <div class="partners-name">страховой дом ВСК</div>
                            <div class="partners-descr-btn partners-descr-btn-open hidden"><span></span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="partners item">
                        <div class="partners-btn button-item-js" data-id="ingostrah">
                            <div class="partners-img"><img src="img/companies/ingostrah.png" alt="ИНГОССТРАХ"></div>
                            <div class="partners-name">ингосстрах</div>
                            <div class="partners-descr-btn partners-descr-btn-open hidden"><span></span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="partners item">
                        <div class="partners-btn button-item-js" data-id="reso">
                            <div class="partners-img reso"><img src="img/companies/reso.png" alt="РЕСО ГАРАНТИЯ"></div>
                            <div class="partners-name">ресо гарантия</div>
                            <div class="partners-descr-btn partners-descr-btn-open hidden"><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partners-accordion j-trigger">
                    <div class="partners-accordion-content text accordeon-wrapper-js" data-id="vsk">
                        <p><span>Страховой Дом ВСК (САО «ВСК»)</span> осуществляет страховую деятельность с 11 февраля
                            1992 года и в настоящее время занимает ведущие позиции на рынке страховых услуг России.</p>
                        <p> В 2017 году компания отметила 25-летний юбилей. Высокий уровень работы компании трижды
                            отмечен благодарностью Президента России за большой вклад в развитие страхового дела (2002,
                            2007 и 2017 гг.). ВСК является трижды лауреатом Национального конкурса «Компания года»
                            (2013, 2015 и 2018 гг.) в номинации «Страховая компания».</p>
                        <ul class="seo-list">
                            <li>200 + современных страховых услуг</li>
                            <li>500 000 + предприятий и организаций под страховой защитой ВСК </li>
                            <li>30 млн граждан РФ под страховой защитой ВСК</li>
                        </ul>
                        <div class="partners-descr-btn partners-descr-btn-close bank-accordion-closed button-item-js">
                            <span></span><span></span></div>
                    </div>
                    <div class="partners-accordion-content text accordeon-wrapper-js" data-id="ingostrah">
                        <p><span>СПАО «Ингосстрах»</span> дна из крупнейших российских страховых компаний, стабильно
                            входит в Топ 10 страховщиков РФ. Относится к категории системообразующих российских
                            страховых компаний. Наиболее медиа-активный страховщик, три года подряд занимает первое
                            место в рейтинге наиболее упоминаемых в прессе страховых компаний. Полное наименование —
                            Страховое публичное акционерное общество «Ингосстрах», номер в реестре страховых компаний —
                            928, лицензии: СИ №0928, СЛ №0928, ОС №0928-03, ОС №0928-04, ОС №0928-05 и на осуществление
                            перестрахования ПС № 0928, выданные 23.09.2015 и ОС №0928-02 от 28.09.2016 г., все лицензии
                            без ограничения срока действия.</p>
                        <div class="partners-descr-btn partners-descr-btn-close bank-accordion-closed button-item-js">
                            <span></span><span></span></div>
                    </div>
                    <div class="partners-accordion-content text accordeon-wrapper-js" data-id="reso">
                        <p><span>РЕСО-Гарантия</span> – универсальная страховая компания, созданная в 1991 году.
                            Компания имеет лицензию на более 100 видов страховых услуг и перестраховочную деятельность.
                        </p>
                        <p>Страховое публичное акционерное общество "РЕСО-Гарантия" (САО "РЕСО-Гарантия") предоставляет
                            широкий спектр услуг по страхованию физических и юридических лиц. Приоритетными
                            направлениями деятельности являются автострахование (КАСКО и ОСАГО, а также ДГО),
                            добровольное медицинское страхование, страхование имущества физических и юридических лиц,
                            ипотечное страхование, страхование туристов, страхование от несчастных случаев и другие
                            виды. </p>
                        <div class="partners-descr-btn partners-descr-btn-close bank-accordion-closed button-item-js">
                            <span></span><span></span></div>
                    </div>
                </div>
            </accordeon-component>
            <accordeon-component>
                <div class="partners-button-container container uncut l-col-3 j-trigger">
                    <div class="partners item soglasie-item">
                        <div class="partners-btn button-item-js" data-id="soglasie">
                            <div class="partners-img"><img src="img/companies/soglasie.png"
                                    alt="Страховая Компания «Согласие»"></div>
                            <div class="partners-name">Страховая Компания «Согласие»</div>
                            <div class="partners-descr-btn partners-descr-btn-open hidden"><span></span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="partners item ugoria-item">
                        <div class="partners-btn button-item-js" data-id="ugoria">
                            <div class="partners-img ugoria"><img src="img/companies/ugoria.png" alt="АО «ГСК «Югория»">
                            </div>
                            <div class="partners-name">АО «ГСК «Югория»</div>
                            <div class="partners-descr-btn partners-descr-btn-open hidden"><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partners-accordion j-trigger">
                    <div class="partners-accordion-content text accordeon-wrapper-js" data-id="soglasie">
                        <p><span> ООО «Страховая Компания «Согласие»</span> ведет свою деятельность уже более 24 лет.
                        </p>
                        <p> Компания предоставляет весь спектр страховых услуг как физическим, так и юридическим лицам,
                            а также является участником мирового рынка перестрахования. Разветвленная сеть продаж,
                            насчитывающая более 350 офисов во всех регионах России, позволяет компании осуществлять
                            страховую защиту имущественных интересов клиентов практически на всей территории страны.
                            В соответствии с Лицензиями, выданными Банком России 25.05.2015 без ограничения срока их
                            действия, СИ № 1307, СЛ №1307, ОС №1307-03, ОС №1307-04, ОС №1307-05, ПС №1307, Компания
                            имеет разрешение на осуществление практически всех видов страхования и перестрахования,
                            разрешенные законодательством РФ.
                        </p>
                        <div class="partners-descr-btn partners-descr-btn-close bank-accordion-closed button-item-js">
                            <span></span><span></span></div>
                    </div>
                    <div class="partners-accordion-content text accordeon-wrapper-js" data-id="ugoria">
                        <p> Акционерное общество<span> «Группа страховых компаний «Югория»</span> основана в 1997
                            г.осуществляет страховую деятельность с 1992 года.</p>
                        <p>Единственным акционером компании является Группа компаний «РЕГИОН».</p>
                        <p>С каждым годом все больше клиентов выбирают Югорию: сейчас ежегодно компания заключает около
                            двух миллионов договоров с физическими лицами и более 40 тысяч – с юридическими.</p>
                        <p>Особое внимание компания уделяет развитию филиальной сети. В настоящее время региональная
                            сеть Компании состоит из 143 филиалов и более 300 агентств и точек продаж, работающих в 65
                            регионах России – от Калининграда до Владивостока.
                            Югория — универсальная страховая компания, предоставляющая широкий спектр страховых услуг.
                            Компания вправе осуществлять деятельность по 23 видам страхования и перестрахованию с
                            использованием 50 различных правил страхования.</p>
                        <div class="partners-descr-btn partners-descr-btn-close bank-accordion-closed button-item-js">
                            <span></span><span></span></div>
                    </div>
                </div>
            </accordeon-component>
        </div>
    </div>
    <drop-down data-id="ins">
        <div class="j-dd-button partners-j-dd-button">
            <img src="img/companies/vsk.png" alt="Страховой Дом ВСК">
            <span class="arrow"><span></span><span></span></span>
        </div>
        <div class="j-dd-wrapper partners-drop-content">
            <p><span class="drop-title">Страховой Дом ВСК (САО «ВСК»)<br></span>осуществляет страховую деятельность с 11
                февраля
                1992 года и в настоящее время занимает ведущие позиции на рынке страховых услуг России.</p>
            <p> В 2017 году компания отметила 25-летний юбилей. Высокий уровень работы компании трижды
                отмечен благодарностью Президента России за большой вклад в развитие страхового дела (2002,
                2007 и 2017 гг.). ВСК является трижды лауреатом Национального конкурса «Компания года»
                (2013, 2015 и 2018 гг.) в номинации «Страховая компания».</p>
            <ul class="seo-list">
                <li>200 + современных страховых услуг</li>
                <li>500 000 + предприятий и организаций под страховой защитой ВСК </li>
                <li>30 млн граждан РФ под страховой защитой ВСК</li>
            </ul>
        </div>
    </drop-down>
    <drop-down data-id="ins">
        <div class="j-dd-button partners-j-dd-button partners-j-dd-button-ing">
            <img src="img/companies/ingostrah.png" alt="ИНГОССТРАХ">
            <span class="arrow"><span></span><span></span></span>
        </div>
        <div class="j-dd-wrapper partners-drop-content">
            <p><span  class="drop-title">СПАО «Ингосстрах»<br></span> дна из крупнейших российских страховых компаний, стабильно
                входит в Топ 10 страховщиков РФ. Относится к категории системообразующих российских
                страховых компаний. Наиболее медиа-активный страховщик, три года подряд занимает первое
                место в рейтинге наиболее упоминаемых в прессе страховых компаний. Полное наименование —
                Страховое публичное акционерное общество «Ингосстрах», номер в реестре страховых компаний —
                928, лицензии: СИ №0928, СЛ №0928, ОС №0928-03, ОС №0928-04, ОС №0928-05 и на осуществление
                перестрахования ПС № 0928, выданные 23.09.2015 и ОС №0928-02 от 28.09.2016 г., все лицензии
                без ограничения срока действия.</p>
        </div>
    </drop-down>
    <drop-down data-id="ins">
        <div class="j-dd-button partners-j-dd-button partners-j-dd-button-reso">
            <img src="img/companies/reso.png" alt="РЕСО ГАРАНТИЯ">
            <span class="arrow"><span></span><span></span></span>
        </div>
        <div class="j-dd-wrapper partners-drop-content">
            <p><span class="drop-title">РЕСО-Гарантия<br></span> – универсальная страховая компания, созданная в 1991 году.
                Компания имеет лицензию на более 100 видов страховых услуг и перестраховочную деятельность.
            </p>
            <p>Страховое публичное акционерное общество "РЕСО-Гарантия" (САО "РЕСО-Гарантия") предоставляет
                широкий спектр услуг по страхованию физических и юридических лиц. Приоритетными
                направлениями деятельности являются автострахование (КАСКО и ОСАГО, а также ДГО),
                добровольное медицинское страхование, страхование имущества физических и юридических лиц,
                ипотечное страхование, страхование туристов, страхование от несчастных случаев и другие
                виды. </p>
        </div>
    </drop-down>
    <drop-down data-id="ins">
        <div class="j-dd-button partners-j-dd-button partners-j-dd-button-sogl">
            <img src="img/companies/soglasie.png" alt="Страховая Компания «Согласие»">
            <span class="arrow"><span></span><span></span></span>
        </div>
        <div class="j-dd-wrapper partners-drop-content">
            <p><span class="drop-title"> ООО «Страховая Компания «Согласие»<br></span> ведет свою деятельность уже более 24 лет.
            </p>
            <p> Компания предоставляет весь спектр страховых услуг как физическим, так и юридическим лицам,
                а также является участником мирового рынка перестрахования. Разветвленная сеть продаж,
                насчитывающая более 350 офисов во всех регионах России, позволяет компании осуществлять
                страховую защиту имущественных интересов клиентов практически на всей территории страны.
                В соответствии с Лицензиями, выданными Банком России 25.05.2015 без ограничения срока их
                действия, СИ № 1307, СЛ №1307, ОС №1307-03, ОС №1307-04, ОС №1307-05, ПС №1307, Компания
                имеет разрешение на осуществление практически всех видов страхования и перестрахования,
                разрешенные законодательством РФ.
            </p>
        </div>
    </drop-down>
    <drop-down data-id="ins">
        <div class="j-dd-button partners-j-dd-button partners-j-dd-button-ug">
            <img src="img/companies/ugoria.png" alt="АО «ГСК «Югория»">
            <span class="arrow"><span></span><span></span></span>
        </div>
        <div class="j-dd-wrapper partners-drop-content">
            <p> <span class="drop-title">Акционерное общество «Группа страховых компаний «Югория»<br></span> основана в 1997
                г.осуществляет страховую деятельность с 1992 года.</p>
            <p>Единственным акционером компании является Группа компаний «РЕГИОН».</p>
            <p>С каждым годом все больше клиентов выбирают Югорию: сейчас ежегодно компания заключает около
                двух миллионов договоров с физическими лицами и более 40 тысяч – с юридическими.</p>
            <p>Особое внимание компания уделяет развитию филиальной сети. В настоящее время региональная
                сеть Компании состоит из 143 филиалов и более 300 агентств и точек продаж, работающих в 65
                регионах России – от Калининграда до Владивостока.
                Югория — универсальная страховая компания, предоставляющая широкий спектр страховых услуг.
                Компания вправе осуществлять деятельность по 23 видам страхования и перестрахованию с
                использованием 50 различных правил страхования.</p>
        </div>
    </drop-down>
</section>
<section class="opportunities">
    <div class="wrapper">
        <div class="h3 i-subtitle">Любой клиент имеет возможность:</div>
        <p class="opportunities-descr">Застраховать свой дом, баню, отделку, инженерное оборудование и домашнее имущество. С компанией «Терем-финанс» - это очень просто::</p>
        <div class="text">
            <ul class="seo-list seo-list-opportunities">
                <li>консультанты компании «Терем-финанс» помогут выбрать подходящую страховую программу с учетом Ваших
                    пожеланий </li>
                <li>страховку можно оформить дистанционно – не нужно специально приезжать в офис</li>
                <li>специалистам не требуется дополнительный осмотр объектов, построенных компанией «Терем» </li>
                <li>для оформления требуется минимальный пакет документов:
                    <span>- паспорт</span>
                    <span>- договор на строительство</span>
                    <span>- свидетельства о собственности на землю или выписка из ЕГРП</span>
                </li>
                <li>мы сопровождаем Вас на протяжении действия полиса и помогаем общаться со страховой компанией, в
                    случае возникновения потребности</li>
            </ul>
        </div>
        <carousel-slider data-id="opportunities-carousel" class="hidden carousel opportunities-carousel"
            data-perwrapper="1:2:2" draggable="false" data-loop="false">
            <div class="carousel-container">
                <div class="opportunities-item item">
                    <p>Консультанты компании «Терем-финанс» помогут выбрать подходящую страховую программу с учетом
                        Ваших пожеланий </p>
                </div>
                <div class="opportunities-item item">
                    <p>Cтраховку можно оформить дистанционно – не нужно специально приезжать в офис</p>
                </div>
                <div class="opportunities-item item">
                    <p>Специалистам не требуется дополнительный осмотр объектов, построенных компанией «Терем» </p>
                </div>
                <div class="opportunities-item item">
                    <p>Для оформления требуется минимальный пакет документов: паспорта, договора на строительство,
                        свидетельства о собственности на землю или выписка из ЕГРП;</p>
                </div>
                <div class="opportunities-item item">
                    <p>Мы сопровождаем Вас на протяжении действия полиса и помогаем общаться со страховой компанией, в
                        случае возникновения потребности</p>
                </div>
            </div>
        </carousel-slider>
    </div>
    <?$APPLICATION->IncludeComponent('terem:standard.blocks', 'insurance.red.btn', [
    'CODE' => 'insurance_indivudual_program',
    'CACHE_TYPE' => 'Y',
    'CACHE_TIME' => 3600000
    ], false, ['HIDE_ICONS' => 'Y']);
?>
</section>
<section class="protect">
    <div class="wrapper protect-wrapper">
        <div class="h3 i-title">От каких событий защищает страховка:</div>
        <div class="text">
            <ul class="seo-list seo-list-protection">
                <li>Взрыв, в том числе произошедший вне застрахованного помещения</li>
                <li>Стихийные бедствия, включая удар молнии</li>
                <li>Падение летательных объектов, падение деревьев и других предметов</li>
                <li>Аварии инженерных систем внутри застрахованного объекта</li>
                <li>Пожар</li>
                <li>Наезд транспортных средств или самоходных машин</li>
                <li>Проникновение воды из соседних, чужих помещений</li>
                <li>Причинение вреда жизни, здоровью или имуществу третьих лиц</li>
                <li>Кража, грабёж, разбой, другие противоправные действия третьих <div>лиц, включая террористические
                        акты</div>
                </li>
            </ul>
        </div>
        <div class="protect-details clearfix">
            <div class="protect-logo"></div>
            <div class="applic-phone protect-aplic">
                <a class="callback-tel callback-tel-icon"
                    href="tel:+74954610110"><span>+7&nbsp;(495)&nbsp;461-01-10</span></a>
                <small class="callback-tel-descr">Или закажите <button is="popup-toggle"
                        data-id="REQUEST_BACK_CALL-popup" aria-haspopup="true" aria-expanded="false">обратный
                        звонок</button></small>
            </div>
            <p class="protect-more">Подробности уточняйте у менеджера<br>«Теремъ-Финанс»</p>
        </div>
    </div>
</section>
<section class="why-insurance">
    <div class="wrapper">
        <div class="h3 i-title">Зачем нужно страховать свой дом?</div>
        <p class="i-title-descr">Загородные строения могут пострадать от пожаров, наводнений, причинения вреда третьими лицами и другим причинам.</p>
    </div>
    <div class="wrapper no-border-wrapper">
        <img src="img/Bitmap/fire2.jpg" alt="Пожар">
        <img src="img/Bitmap/fire1.jpg" alt="Пожар">
    </div>
    <div class="wrapper">
        <div class="h3 i-subtitle why-insurance-sub">Защити семью от риска и угрозы </div>
        <p class="why-insurance-descr"> В России каждый год фиксируется от 150 000 до 200 000 пожаров, из них
            70% приходится на жилые помещения. Чаще всего страдают частные постройки, ввиду их уязвимости перед
            стихийными бедствиями. Наиболее беззащитны в этом отношении - дачи сезонного проживания.</p>
        <p class="why-insurance-descr">Если дому нанесён ущерб, владельцу приходится искать средства на его
            восстановление или на постройку нового, а зачастую брать кредит. К тому же, пожар – это сильный стресс для
            домовладельца, особенно когда в этот момент поблизости никого нет. Но если жилище застраховано, на помощь
            немедленно приходит страховой полис.</p>
        <div class="why-insurance-ex">
            <p>Наши специалисты помогут защитить ваше имущество на случай стихийных бедствий, аварий, пожара, грабежа и других дополнительных рисков</p>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent('terem:standard.blocks', 'insurance.white.btn', [
    'CODE' => 'insurance_indivudual_program-2',
    'CACHE_TYPE' => 'Y',
    'CACHE_TIME' => 3600000
    ], false, ['HIDE_ICONS' => 'Y']);
?>
<?$APPLICATION->IncludeComponent('terem:standard.blocks', 'insurance.red.block', [
    'CODE' => 'insurance_consultation',
    'CACHE_TYPE' => 'Y',
    'CACHE_TIME' => 3600000
    ], false, ['HIDE_ICONS' => 'Y']);
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');?>