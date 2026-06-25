<!--==================== FOOTER ====================-->
	<footer>
		<div class="container">
			<div class="row footer-item-cover">
				<div class="footer-subscribe col-md-7 col-lg-8">
					<h6>Подписка</h6>
					<p>Подпишитесь на новостную рассылку от <span style="background: rgba(255, 217, 16, 0.6);">inmi.by</span> </p>
					<form class="subscribe-form">
						<i class="fa fa-at" aria-hidden="true"></i>
						<input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
						<button type="submit" class="btn btn-form"><span>Готово</span></button>
					</form>
				</div>
				<div class="footer-item col-md-5 col-lg-4">
					<h6>Главное</h6>
					<ul class="footer-list">
						<li><a href="#">Реквезиты</a></li>
						<li><a href="#">Главная</a></li>
						<li><a href="#">Как совершить покупку</a></li>
						<li><a href="#">Структура</a></li>
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Продукты</a></li>
						<li><a href="#">Оставить отзыв</a></li>
					</ul>
				</div>
			</div>
			<div class="row footer-item-cover">
				<div class="footer-touch col-md-7 col-lg-8">
					<h6>Оставайтесь на связи</h6>
					<ul class="footer-soc social-list">
						<li><a target="_blank" href="https://invite.viber.com/?g2=AQBraLupPo8rSk2YPoN%2Bzo70k8QbxSBkOzKJG%2BMsZDnRDZS2JDAB2O%2FKSmRkYEkg&lang=ru"><i class="bi bi-tiktok" aria-hidden="true">Viber</i></a></li>
						<li><a target="_blank" href="https://t.me/inmi_by"><i class="bi bi-tiktok" aria-hidden="true">Telegram</i></a></li>
						<li><a target="_blank" href="https://www.tiktok.com/@inmi.by"><i class="bi bi-tiktok" aria-hidden="true">TikTok</i></a></li>						
						<li><a target="_blank" href="https://www.youtube.com/channel/UCRaPXjE_UVRXqRUXNbFH-ww"><i class="bi bi-tiktok" aria-hidden="true">YouTube</i></a></li>
					</ul>
					<div class="footer-autor">Остались вопросы? напишите нам: <a href="mailto:inmisale@mail.ru">inmisale@mail.ru</a></div>
				</div>
				<div class="footer-item col-md-5 col-lg-4">
					<h6>Реквизиты:</h6>
					<ul class="footer-list">
						
Государственное научное учреждение "Институт микробиологии Национальной академии наук Беларуси"
Юридический адрес: 220084, ул. Купревича,2
Минск, Республика Беларусь,
УНП - 100289066

В Едином государственном реестре юридических лиц и индивидуальных предпринимателей за №100289066, 15.08.2000, Мингорисполком.
						<!-- <li><a href="#">Road Bike</a></li>
						<li><a href="#">City Bike</a></li>
						<li><a href="#">Mountain Bike</a></li>
						<li><a href="#">Kids Bike</a></li>
						<li><a href="#">BMX Bike</a></li> -->
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-copyright"><p>&copy; 2026 Институт микробиологии НАН Беларуси. Все права защищены.</p></div>
				<ul class="footer-pay">
					<!-- <li><a href="#"><img src="assets/img/footer-pay-1.png" alt="img"></a></li>
					<li><a href="#"><img src="assets/img/footer-pay-2.png" alt="img"></a></li>
					<li><a href="#"><img src="assets/img/footer-pay-3.png" alt="img"></a></li>
					<li><a href="#"><img src="assets/img/footer-pay-4.png" alt="img"></a></li> -->
				</ul>
			</div>
		</div>
	</footer>
	<!--================== FOOTER END ==================-->

	<!--===================== TO TOP =====================-->
	<a class="to-top" href="#home">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</a>
	<!--=================== TO TOP END ===================-->
	<!--==================== SCRIPT	====================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/jquery.nice-select.js"></script>
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/lazyload.min.js"></script>
	<script src="assets/js/data/fizProductData.js"></script>
	<script src="assets/js/my-js.js"></script>

	<script src="assets/js/scripts.js"></script>

	<?php if (!is_admin()) : ?>
	<div class="yur-calc-overlay" data-yur-calc-close></div>
	<aside class="yur-calc-panel" aria-hidden="true" aria-labelledby="yur-calc-title" role="dialog">
		<div class="yur-calc-panel__header">
			<div>
				<p class="yur-calc-panel__eyebrow">Расчет расхода</p>
				<h3 id="yur-calc-title" class="yur-calc-panel__title">Калькулятор расхода препарата</h3>
			</div>
			<button class="yur-calc-panel__close" type="button" aria-label="Закрыть калькулятор" data-yur-calc-close>&times;</button>
		</div>
		<div class="yur-calc-panel__body">
			<p class="yur-calc-panel__lead">Выберите параметры применения — поля калькулятора подстраиваются под выбранный препарат.</p>
			<div class="yur-calc-fields" aria-label="Поля для расчета расхода препарата"></div>
			<button class="btn btn-form yur-calc-panel__submit" type="button"><span>Рассчитать</span></button>
		</div>
	</aside>

	<style>
		.yur-calc-overlay{position:fixed;inset:0;background:rgba(18,39,31,.48);backdrop-filter:blur(3px);opacity:0;visibility:hidden;transition:opacity .28s ease,visibility .28s ease;z-index:998}.yur-calc-overlay.is-active{opacity:1;visibility:visible}.yur-calc-panel{position:fixed;top:0;right:0;width:min(460px,100%);height:100vh;background:linear-gradient(180deg,#fff 0%,#f7fbf8 100%);box-shadow:-24px 0 60px rgba(24,67,48,.22);transform:translateX(105%);transition:transform .34s ease;z-index:999;padding:34px 32px;overflow-y:auto;border-left:5px solid #246e49}.yur-calc-panel.is-active{transform:translateX(0)}.yur-calc-panel__header{display:flex;align-items:flex-start;justify-content:space-between;gap:18px;padding-bottom:24px;margin-bottom:24px;border-bottom:1px solid rgba(36,110,73,.16)}.yur-calc-panel__eyebrow{margin:0 0 8px;color:#246e49;font-size:13px;font-weight:700;letter-spacing:.08em;text-transform:uppercase}.yur-calc-panel__title{margin:0;color:#173c2b;font-size:28px;line-height:1.18;font-weight:700}.yur-calc-panel__close{width:42px;height:42px;min-width:42px;border:1px solid rgba(36,110,73,.18);border-radius:50%;background:#fff;color:#246e49;font-size:30px;line-height:38px;cursor:pointer;transition:background .2s ease,color .2s ease,transform .2s ease}.yur-calc-panel__close:hover{background:#246e49;color:#fff;transform:rotate(90deg)}.yur-calc-panel__lead{margin:0 0 24px;color:#5d6d64;line-height:1.6}.yur-calc-fields{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:26px;padding:20px;background:#fff;border:1px solid rgba(36,110,73,.14);border-radius:18px;box-shadow:0 16px 34px rgba(36,110,73,.08)}.yur-calc-field{display:flex;flex-direction:column;gap:8px;margin:0;color:#173c2b;font-weight:600}.yur-calc-choice{border:0;padding:0}.yur-calc-choice legend{margin:0 0 10px;padding:0;color:#173c2b;font-weight:700}.yur-calc-choice__option{display:flex;align-items:center;gap:10px;margin:0 0 8px;font-weight:500;cursor:pointer}.yur-calc-choice__option input{width:auto;accent-color:#246e49}.yur-calc-empty{grid-column:1/-1;color:#5d6d64;line-height:1.5}.yur-calc-field--wide{grid-column:1/-1}.yur-calc-field input,.yur-calc-field select,.yur-calc-field textarea{width:100%;border:1px solid rgba(36,110,73,.22);border-radius:12px;background:#f8fbf9;color:#173c2b;padding:13px 14px;font:inherit;outline:none;transition:border-color .2s ease,box-shadow .2s ease,background .2s ease}.yur-calc-field input:focus,.yur-calc-field select:focus,.yur-calc-field textarea:focus{border-color:#246e49;background:#fff;box-shadow:0 0 0 4px rgba(36,110,73,.12)}.yur-calc-panel__submit{width:100%;justify-content:center}.yur-calc-open{cursor:pointer}@media(max-width:575px){.yur-calc-panel{padding:26px 20px}.yur-calc-panel__title{font-size:23px}.yur-calc-fields{grid-template-columns:1fr;padding:16px}}
	</style>

	<script type="module">
		import { productsForCalc } from '<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/data/productsForCalc.js';

		(function () {
			var panel = document.querySelector('.yur-calc-panel');
			var overlay = document.querySelector('.yur-calc-overlay');
			var title = document.getElementById('yur-calc-title');
			var fields = document.querySelector('.yur-calc-fields');
			var closeElements = document.querySelectorAll('[data-yur-calc-close]');
			if (!panel || !overlay || !title || !fields) return;
			var typeToCategories = {type1:[{categoryKey:'cathegorie1',questionKey:'question1'},{categoryKey:'cathegorie2',questionKey:'question2'}],type2:[{categoryKey:'cathegorie3',questionKey:'question3'},{categoryKey:'cathegorie4',questionKey:'question4'}],type3:[{categoryKey:'cathegorie5',questionKey:'question5'},{categoryKey:'cathegorie6',questionKey:'question6'}]};
			function normalizeProductTitle(value){return (value || '').replace(/\s*\([^)]*\)\s*/g,'').trim();}
			function createFieldset(titleText,name,options,onChange){var fieldset=document.createElement('fieldset');fieldset.className='yur-calc-field yur-calc-field--wide yur-calc-choice';var legend=document.createElement('legend');legend.textContent=titleText;fieldset.appendChild(legend);options.forEach(function(option,index){var label=document.createElement('label');label.className='yur-calc-choice__option';var input=document.createElement('input');input.type='radio';input.name=name;input.value=option.value;input.checked=index===0;input.addEventListener('change',function(){if(input.checked)onChange(option.value);});var text=document.createElement('span');text.textContent=option.label;label.appendChild(input);label.appendChild(text);fieldset.appendChild(label);});return fieldset;}
			function createNumberInput(questionText){var label=document.createElement('label');label.className='yur-calc-field yur-calc-field--wide';var span=document.createElement('span');span.textContent=questionText;var input=document.createElement('input');input.type='number';input.min='0';input.step='0.01';input.placeholder='Введите значение';label.appendChild(span);label.appendChild(input);return label;}
			function getFilledOptions(product,keys){return keys.filter(function(key){return product[key];}).map(function(key){return{value:key,label:product[key]};});}
			function renderQuestionInput(product,questionKey){var previousInput=fields.querySelector('[data-calc-question-input]');if(previousInput)previousInput.remove();if(!product[questionKey])return;var input=createNumberInput(product[questionKey]);input.setAttribute('data-calc-question-input','');fields.appendChild(input);}
			function renderCategories(product,selectedType){var previousCategories=fields.querySelector('[data-calc-categories]');if(previousCategories)previousCategories.remove();var previousInput=fields.querySelector('[data-calc-question-input]');if(previousInput)previousInput.remove();var categoryOptions=(typeToCategories[selectedType]||[]).filter(function(item){return product[item.categoryKey];});if(!categoryOptions.length)return;var fieldset=createFieldset(product.cathegorie1Title||'Выберите способ внесения:','calc-category',categoryOptions.map(function(item){return{value:item.questionKey,label:product[item.categoryKey]};}),function(questionKey){renderQuestionInput(product,questionKey);});fieldset.setAttribute('data-calc-categories','');fields.appendChild(fieldset);renderQuestionInput(product,categoryOptions[0].questionKey);}
			function renderCalculatorFields(product){fields.innerHTML='';if(!product){var message=document.createElement('p');message.className='yur-calc-field yur-calc-field--wide yur-calc-empty';message.textContent='Для выбранного препарата пока нет данных для расчета.';fields.appendChild(message);return;}var typeOptions=getFilledOptions(product,['type1','type2','type3']);if(!typeOptions.length)return;fields.appendChild(createFieldset(product.type1Title||'Выберите объект:','calc-type',typeOptions,function(selectedType){renderCategories(product,selectedType);}));renderCategories(product,typeOptions[0].value);}
			function openCalculator(productName){var normalizedProductName=normalizeProductTitle(productName);var product=productsForCalc.find(function(item){return item.title===productName;})||productsForCalc.find(function(item){return normalizeProductTitle(item.title)===normalizedProductName;});title.textContent='Калькулятор расхода препарата '+(productName||'');renderCalculatorFields(product);panel.classList.add('is-active');overlay.classList.add('is-active');panel.setAttribute('aria-hidden','false');document.body.style.overflow='hidden';}
			function closeCalculator(){panel.classList.remove('is-active');overlay.classList.remove('is-active');panel.setAttribute('aria-hidden','true');document.body.style.overflow='';}
			function getProductTitle(button){var card=button.closest('.prod-yur-item');var titleElement=card ? card.querySelector('.prod-yur-descr-box h5') : null;titleElement=titleElement||document.querySelector('.my-title, .title, .s-header-title h1, h1');return titleElement ? titleElement.textContent.trim() : '';}
			document.querySelectorAll('.prod-yur-calc-box .btn').forEach(function(button){if(button.dataset.yurCalcBound==='true')return;button.dataset.yurCalcBound='true';button.classList.add('yur-calc-open');button.setAttribute('type','button');button.addEventListener('click',function(event){event.preventDefault();openCalculator(getProductTitle(button));});});
			closeElements.forEach(function(element){element.addEventListener('click',closeCalculator);});
			document.addEventListener('keydown',function(event){if(event.key==='Escape')closeCalculator();});
		}());
	</script>
	<?php endif; ?>


    <?php wp_footer(); ?>
</body>
</html>