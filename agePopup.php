//paste the code in the function.php file

function age_popup() {
	?>
		<div class="modal-box">
			<div class="modal-body-title">
				Age Verification
			</div>
			<form action="" id="approve-form">
				<label class="form-check">
					<input class="form-check-input" name="approve" type="checkbox" id="chk1" required>
					<span class="form-check-label" for="chk1">
						I confirm that I am over the age of <span id="yearApprove">18</span>
					</span>
				</label>

				<label class="form-check">
					<input class="form-check-input input-year" name="approve" type="checkbox" id="chk2">
					<span class="form-check-label" for="chk2">
						Remember me for 30 days
						<span class="cookie">I confirm that this is not a shared device</span>
					</span>
				</label>

				<button id="approveBtn" class="btn approveBtn" type="submit">Enter</button>

				<p class="small-notification">You must be legally old enough to purchase stuff.</p>
			</form>
		</div>

		<style>
			.modalAge .modal-content {
				position: relative;
			}
			.modalAge .modal-box {
				padding: 30px;
				width: 100%;
			}
			.modalAge .modal-body-title {
				font-size: 26px;
				line-height: 30px;
				letter-spacing: 0.5px;
				color: #343b93;
				text-transform: uppercase;
				margin-bottom: 20px;
				text-align: center;
			}
			.modalAge form {
				margin-bottom: 0;
			}
			.modalAge label {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: horizontal;
				-webkit-box-direction: normal;
				-ms-flex-direction: row;
				flex-direction: row;
				-webkit-box-align: center;
				-ms-flex-align: center;
				align-items: center;
				padding: 0;
				margin: 0;
				font-size: 14px;
				line-height: 18px;
				font-style: normal;
				margin-top: 15px;
				max-width: 260px;
				margin-left: auto;
				margin-right: auto;
			}
			.modalAge input {
				position: relative !important;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				-webkit-box-sizing: content-box;
				box-sizing: content-box;
				overflow: hidden;
				-webkit-box-flex: 0;
				-ms-flex: none;
				flex: none;
				margin-right: 10px;
				margin-top: 0;
			}
			.form-check-label span.cookie {
				display: block;
				font-size: 12px;
			}
			.modalAge .form-check-input:disabled~.form-check-label {
				color: #343b93;
				opacity: 0.4;
			}
			.modalAge input:before {
				content: '';
				display: block;
				-webkit-box-sizing: content-box;
				box-sizing: content-box;
				width: 20px;
				height: 20px;
				border: 2px solid #343b93;
				-webkit-transition: 0.2s border-color ease;
				-o-transition: 0.2s border-color ease;
				transition: 0.2s border-color ease;
				opacity: 1;
			}
			.modalAge input:checked:before {
				border-color: #343b93;
				-webkit-transition: 0.5s border-color ease;
				-o-transition: 0.5s border-color ease;
				transition: 0.5s border-color ease;
			}
			.modalAge input:disabled:before {
				opacity: 0.4;
			}
			.modalAge input:after {
				content: '';
				display: block;
				position: absolute;
				-webkit-box-sizing: content-box;
				box-sizing: content-box;
				top: 50%;
				left: 50%;
				-webkit-transform-origin: 50% 50%;
				-ms-transform-origin: 50% 50%;
				transform-origin: 50% 50%;
				background-color: #343b93;
				width: 16px;
				height: 16px;
				border-radius: 100vh;
				-webkit-transform: translate(-50%, -50%) scale(0);
				-ms-transform: translate(-50%, -50%) scale(0);
				transform: translate(-50%, -50%) scale(0);
				-webkit-box-shadow: 4px 4px 0px 0px #343b93;
				box-shadow: 4px 4px 0px 0px #343b93;
			}
			.modalAge input[type="radio"]:before {
				border-radius: 100vh;
			}
			.modalAge input[type="radio"]:after {
				width: 16px;
				height: 16px;
				border-radius: 100vh;
				-webkit-transform: translate(-50%, -50%) scale(0);
				-ms-transform: translate(-50%, -50%) scale(0);
				transform: translate(-50%, -50%) scale(0);
				-webkit-box-shadow: 4px 4px 0px 0px #12CBC4;
				box-shadow: 4px 4px 0px 0px #12CBC4;
			}
			.modalAge input[type="radio"]:checked:after {
				-webkit-animation: toggleOnRadio 0.2s ease forwards;
				animation: toggleOnRadio 0.2s ease forwards;
			}
			.modalAge input[type="checkbox"]:before {
				border-radius: 0;
			}
			.modalAge input[type="checkbox"]:after {
				width: 9.6px;
				height: 16px;
				border-radius: 0;
				-webkit-transform: translate(-50%, -85%) scale(0) rotate(45deg);
				-ms-transform: translate(-50%, -85%) scale(0) rotate(45deg);
				transform: translate(-50%, -85%) scale(0) rotate(45deg);
				background-color: transparent;
			}
			.modalAge input[type="checkbox"]:checked:after {
				-webkit-animation: toggleOnCheckbox 0.2s ease forwards;
				animation: toggleOnCheckbox 0.2s ease forwards;
			}
			.modalAge input[type="checkbox"].filled:before {
				border-radius: 0;
				-webkit-transition: 0.2s border-color ease, 0.2s background-color ease;
				-o-transition: 0.2s border-color ease, 0.2s background-color ease;
				transition: 0.2s border-color ease, 0.2s background-color ease;
			}
			.modalAge input[type="checkbox"].filled:checked:not(:disabled):before {
				background-color: #12CBC4;
			}
			.modalAge input[type="checkbox"].filled:not(:disabled):after {
				-webkit-box-shadow: 4px 4px 0px 0px white;
				box-shadow: 4px 4px 0px 0px white;
			}
			.modalAge .small-notification {
				font-size: 12px;
				line-height: 14px;
				letter-spacing: 0.25px;
				color: #343b93;
				margin-bottom: 0;
				text-align: center;
			}
			.modalAge .approveBtn {
				margin-top: 20px;
				margin-bottom: 10px;
				background: #ffbdbd;
				border-radius: 5px;
				color: #343b93;
				font-size: 14px;
				letter-spacing: 0.25px;
				display: block;
				width: 100%;
				padding: 13px 20px;
				-webkit-transition: .4s all ease;
				-o-transition: .4s all ease;
				transition: .4s all ease;
				border: none;
			}
			.modalAge .approveBtn:hover:not([disabled]), .modalAge .approveBtn:focus:not([disabled]), .modalAge .approveBtn:active:not([disabled]) {
				background: #de9292;
				-webkit-transition: .4s all ease;
				-o-transition: .4s all ease;
				transition: .4s all ease;
			}
			@-webkit-keyframes toggleOnCheckbox {
				0% {
					opacity: 0;
					-webkit-transform: translate(-50%, -85%) scale(0) rotate(45deg);
					transform: translate(-50%, -85%) scale(0) rotate(45deg);
				}
				70% {
					opacity: 1;
					-webkit-transform: translate(-50%, -85%) scale(0.9) rotate(45deg);
					transform: translate(-50%, -85%) scale(0.9) rotate(45deg);
				}
				100% {
					-webkit-transform: translate(-50%, -85%) scale(0.8) rotate(45deg);
					transform: translate(-50%, -85%) scale(0.8) rotate(45deg);
				}
			}
			@keyframes toggleOnCheckbox {
				0% {
					opacity: 0;
					-webkit-transform: translate(-50%, -85%) scale(0) rotate(45deg);
					transform: translate(-50%, -85%) scale(0) rotate(45deg);
				}
				70% {
					opacity: 1;
					-webkit-transform: translate(-50%, -85%) scale(0.9) rotate(45deg);
					transform: translate(-50%, -85%) scale(0.9) rotate(45deg);
				}
				100% {
					-webkit-transform: translate(-50%, -85%) scale(0.8) rotate(45deg);
					transform: translate(-50%, -85%) scale(0.8) rotate(45deg);
				}
			}
			@-webkit-keyframes toggleOnRadio {
				0% {
					opacity: 0;
					-webkit-transform: translate(-50%, -50%) scale(0);
					transform: translate(-50%, -50%) scale(0);
				}
				70% {
					opacity: 1;
					-webkit-transform: translate(-50%, -50%) scale(0.9);
					transform: translate(-50%, -50%) scale(0.9);
				}
				100% {
					-webkit-transform: translate(-50%, -50%) scale(0.8);
					transform: translate(-50%, -50%) scale(0.8);
				}
			}
			@keyframes toggleOnRadio {
				0% {
					opacity: 0;
					-webkit-transform: translate(-50%, -50%) scale(0);
					transform: translate(-50%, -50%) scale(0);
				}
				70% {
					opacity: 1;
					-webkit-transform: translate(-50%, -50%) scale(0.9);
					transform: translate(-50%, -50%) scale(0.9);
				}
				100% {
					-webkit-transform: translate(-50%, -50%) scale(0.8);
					transform: translate(-50%, -50%) scale(0.8);
				}
			}
			@media (max-width: 767px) {
				.modalAge .modal-box {
					padding: 20px;
				}
			}
		</style>
	<?php
}

function register_shortcodes() {
	add_shortcode('age-popup','age_popup');
}
add_action('init', 'register_shortcodes');


//paste the code in the footer.php file

<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js" integrity="sha512-wT7uPE7tOP6w4o28u1DN775jYjHQApdBnib5Pho4RB0Pgd9y7eSkAV1BTqQydupYDB9GBhTcQQzyNMPMV3cAew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
	jQuery(window).on('load', function () {
		setTimeout(function(){
			if(!Cookies.get('hide-div')) {
				elementorFrontend.documentsManager.documents[19297].showModal();
				//don't forget to change [ID] to yours
			}
		}, 1000);

		setTimeout(function(){
			jQuery('#approve-form').submit(function(){
                Cookies.set('yearApprove', jQuery('#yearApprove').text(), { expires: 30 });
				//change the number 30 if you want to set a different number of days for cookies
				if (jQuery('.input-year').is(":checked")) {
					Cookies.set('hide-div', true, { expires: 30 });
					//change the number 30 if you want to set a different number of days for cookies
					elementorFrontend.documentsManager.documents[19297].getModal().hide();
					//don't forget to change [ID] to yours
				} else {
					Cookies.set('hide-div', true, { expires: 1 });
					//if 30 days checkbox is not checked, we remember user for 1 day
					elementorFrontend.documentsManager.documents[19297].getModal().hide();
					//don't forget to change [ID] to yours
				}
				return false;
			});
		}, 2000);
	});
</script>