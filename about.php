<?php
/*
Template Name: О нас
*/
?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
	
	  <?php wp_head(); ?>           
    <style type="text/css">

		
		
		.navbar-brand{
			padding-top: 10px !important;
			padding-bottom: 10px !important;
			display: flex;
		}
		
        .container {
            max-width: 760px !important;
        }

		.hero-section .col{
			padding: 0 !important;
		}


		.hero-section .row{
			margin-left: 0 !important;
			margin-right: 0 !important;
		}
		
        .hero-section {
            padding-top: 4%;
            background-color: #f5f5f5;
        }

        .grey-section {
            background-color: #f5f5f5;
        }

        .hero.container {
            padding: 0;
        }

        .container h2 {
            font-size: 30px;
            font-family: 'Open Sans', Arial, sans-serif;
            font-weight: 600;
        }

        .container p, ul li {
            font-size: 18px;
            line-height: 1.55;
            font-family: 'Open Sans', Arial, sans-serif;
            font-weight: 300;
            color: #000;
        }
		.container p{
			line-height: 2.3 !important;
		}
		@media screen and (max-width: 992px){
			.container p, ul li {
				font-size: 17px;
			}
			
			.container h2 {
				font-size: 30px;
			}
			
			.container p, h2, ul li {
				padding-left: 1rem;
				padding-right: 1rem;
			}
			
			.hero-section{
				padding-top: 6%;
			}
			
			.navbar-brand{
			padding-left: 20px;
			}
			
		}
		
		@media screen and (max-width: 420px){
			.container h2 {
				font-size: 27px;
			}
		}
			
        ul {

            padding-left: 0 !important;
        }

        ul li {
            list-style-type: none;
			line-height: 2.55;
        }

        ul li::before {
            content: "\2014\00a0";
        }

		.copyright{
			font-size: 16px !important;
			margin: 12px 0 12px 0 !important;
		}
		
		
		
		
		
		
		

.loader-container{
	z-index: 99999;
	position: fixed;
	width: 100vw;
	height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 50;
	background-color: white;
	overflow: overlay;
}

.to-hide{
	animation: toHide .5s;
}
.loader-hiden{
	display: none;
}


@keyframes toHide {
	0% {
        opacity: 1;
    }
	100% {
        opacity: 0;
    }
}


.v {
    position: relative;
    width: 100%;
}

.min {
    position: relative;
    width: 100%;
    animation: animate .9s linear infinite;
}

@keyframes animate {
    0% {
      top: -50px;

    }

   50% {
     top: -41px;

    }

  100% {
    top: -50px;

    }
}
		
		
		.forminator-field{
			border-bottom: 1px solid !important;
		}
		
		.forminator-input{
			background-color: #FBFBFB !important;
		}
		#forminator-module-2601 > div.forminator-row.forminator-row-last > div > div{
			border-bottom: none !important;
		}
		.forminator-button-submit{
			background-color: black !important;
    		border-radius: 4px !important;
		}
		.padb-5 {

			padding-bottom: 2.2rem !important; }

		.mert-5{

		margin-top: 2.2rem !important;}
		

    </style>
	
  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://levelz-group.com/wp-content/themes/levelz/assets/img/v.svg" rel="icon">

    <title>Партнерство и сотрудничество | Levelz Group</title>
</head>
<body>
<nav class="navbar navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" href="https://levelz-group.com/">
            <img src="https://levelz-group.com/wp-content/uploads/2023/01/hero_logo_re.svg" alt="" width="100%" height="30">
        </a>
    </div>
</nav>

	
<div class="loader-container">
	<div style="width: 195px;">
		<div class="v">
			<img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/full.svg">
		</div>
		<div class="min">
			<img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/full-min.svg">
		</div>
	</div>
</div>

<section class="hero-section">
    <div class="container hero">
        <div class="row">
            <div class="col">
               <iframe width="100%" height="500px" src="https://www.youtube.com/embed/jxysyp6REBc?autoplay=1&controls=0&loop=1&playlist=jxysyp6REBc&rel=0&showinfo=0&modestbranding=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
        </div>
    </div>
    <div class="container mert-5 padb-5">
        <h2 class="title pt-5" >О НАС</h2>
        <p class="description mert-5 padb-5">
            Компания Levelz Group основана экспертами по недвижимости с более чем 5-летним опытом работы в сфере недвижимости в Турции. Levelz Group — это инвестиционно-консалтинговая компания с полным спектром услуг, которая предоставляет своим клиентам высококачественный портфель недвижимости и работает как с крупнейшими застройщиками Турции, так и с надежными домовладельцами. Наша команда профессионалов в сфере недвижимости сочетает международные стандарты с местным опытом. Мы внимательно изучаем рынок, чтобы предоставить нашим клиентам уникальные возможности для удовлетворения их инвестиционных потребностей.
        </p>
    </div>
</section>


<section class="regular-section">
    <div class="container mert-5 mb-5 padb-5">
        <h2 class="title pt-5">ОФФЕР</h2>
        <p class="description mert-5">
            Для наших партнеров мы предлагаем особые условия сотрудничества и при успешной завершении сделки ваших
            клиентов, мы выплачиваем <span style="font-size: 19px; font-weight: 600; color: #b03737;">от 1% до 5%</span> от суммы продажи.
        </p>
    </div>
</section>

<section class="grey-section">
    <div class="container mert-5 padb-5 pt-5">
        <h2 class="title pt-5">НАШИ УСЛУГИ</h2>
        <p class="description mert-5 mb-5">
            Мы гарантируем полный сервис вашим клиентам от подбора недвижимости до закрытия сделки. В наши услуги
            входит:
        </p>
        <ul class=" padb-5">
            <li>Консьерж-сервис и трансфер</li>
            <li>Анализ кейса и подбор подходящих вариантов для клиента</li>
            <li>Бесплатный показ недвижимости</li>
            <li>Аудит выбранного объекта</li>
            <li>Оформление документов и сопровождение сделки</li>
            <li>Юридическое сопровождение</li>
            <li>Пост-продажный сервис</li>
        </ul>
    </div>
</section>

	
	
	
	
	
<section class="regular-section">
    <div class="container mert-5 padb-5">
        <h2 class="title pt-5">СВЯЗАТЬСЯ</h2>
        <p class="description mert-5 mb-5">
            Для более подробной информации свяжитесь с нами либо оставьте заявку:
        </p>
        <div class="w-100 d-flex justify-content-center">
            <div class="d-flex ">
                <a href="mailto:partners@levelz-group.com" class="m-2">
                    <img src="https://levelz-group.com/wp-content/uploads/2023/07/mail_svg.svg" alt="" width="40px" height="40px">
                </a>
                <a href="https://t.me/levelzgroup" class="m-2">
                    <img src="https://levelz-group.com/wp-content/uploads/2023/07/telegram_svg.svg" alt="" width="40px" height="40px">
                </a>
                <a href="whatsapp://send/?phone=+905012795555&text=Здравствуйте! Хочу узнать подробнее про партнерские условия и сотрудничество с вами." class="m-2">
                    <img src="https://levelz-group.com/wp-content/uploads/2023/07/whatsapp_svg.svg" alt="" width="40px" height="40px">
                </a>
                <a href="tel:+905012795555" class="m-2">
                    <img src="https://levelz-group.com/wp-content/uploads/2023/07/phone_svg.svg" alt="" width="40px" height="40px">
                </a>
            </div>
        </div>

    </div>
</section>

	
	
<section class="regular-section">
	<div class="container">
		<?php echo do_shortcode('[forminator_form id="2601"]'); ?>
	</div>
</section>	
	
	
	
	
	
	
<nav class="navbar navbar-light bg-dark">
    <div class="container">
		<div class="w-100 d-flex justify-content-center">
                <p class="text-white copyright">
                    Copyright &copy; 2023 Levelz Group.
                </p>
            </div>
    </div>
</nav>
<?php wp_footer(); ?>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>
	window.onload = function loadingEnd () {
		let loader = document.querySelector('.loader-container');
		loader.classList.add("to-hide");
		setTimeout(function none () {loader.style.display='none'}, 450)
	}
	
let observer = new MutationObserver(hideElement);
observer.observe(document.body, { childList: true, subtree: true });

function hideElement() {
    let v = document.querySelector('.ytp-chrome-top');
    if(v){
        v.style.display='none';
        observer.disconnect(); 
    }
}

	
</script>
</body>
</html>