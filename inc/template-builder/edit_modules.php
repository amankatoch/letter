<div id="edit-modules-container">
	<div id="edit-overlay" class="edit-overlay" style="display:none"></div>

	<div class="esf-edit" id="esf-edit-link" style="display:none;height:250px;">
		<div class="esf-edit-box">
			<div class="esf-edit-box-title">Edit Link</div>
			<div class="esf-edit-box-content">
				<div class="esf-edit-box-content-field">
					<label>Title</label>
					<input type="text" class="esf-edit-box-content-field-input link"/>
				</div>
				<div class="esf-edit-box-content-field nth">
					<label>URL: <span>(full address including http://)</span></label>
					<input type="text" class="esf-edit-box-content-field-input url"/>
				</div>
			</div>
			<div class="esf-edit-box-buttons">
				<button class="esf-edit-box-buttons-cancel button" data-close="esf-edit-link" type="button">Cancel</button>
				<button class="esf-edit-box-buttons-save button button-primary" data-close="esf-edit-link" type="button">Save</button>
			</div>
		</div>
	</div>

	<div class="esf-edit" id="esf-edit-title" style="display:none;height:150px">
		<div class="esf-edit-box">
			<div class="esf-edit-box-title">Edit Title</div>
			<div class="esf-edit-box-content">
				<div class="esf-edit-box-content-field">
					<input type="text" class="esf-edit-box-content-field-input title"/>
				</div>
			</div>
			<div class="esf-edit-box-buttons">
				<button class="esf-edit-box-buttons-cancel button" data-close="esf-edit-title" type="button">Cancel</button>
				<button class="esf-edit-box-buttons-save button button-primary" data-close="esf-edit-title" type="button">Save</button>
			</div>
		</div>
	</div>


	<div class="esf-edit" id="esf-edit-text" style="display:none;height:400px">
		<div class="esf-edit-box">
			<div class="esf-edit-box-title">Edit Text</div>
			<div class="esf-edit-box-content">
				<div class="esf-edit-box-content-field">
					<?php wp_editor("","content",array(
						'media_buttons' => false,
						'editor_height' => '175',
						'editor_class' => 'mail-edit-text',
						//'teeny' => true,
						'wpautop' => false
						//'editor_css' => '<link rel="stylesheet" href="'.PPRS_PLUGIN_URL.'assets/css/editor-style.css" />'
					)); ?>
					<!-- <textarea class="esf-edit-box-content-field-textarea text"></textarea> -->
				</div>
			</div>
			<div class="esf-edit-box-buttons">
				<button class="esf-edit-box-buttons-cancel button" data-close="esf-edit-text" type="button">Cancel</button>
				<button class="esf-edit-box-buttons-save button button-primary" data-close="esf-edit-text" type="button">Save</button>
			</div>
		</div>
	</div>


	<div class="esf-edit" id="esf-edit-icon" style="display:none;height:360px">
		<div class="esf-edit-box">
			<div class="esf-edit-box-title">Edit Icon</div>
			<div class="esf-edit-box-content icons-box">
				<!-- <div class="esf-edit-box-content-text">Select Icon</div> -->
				<div class="esf-edit-box-content-field nth" style="padding-left: 0;">
					<label>URL: <span>(full address including http://)</span></label>
					<input style="width:100%" type="text" class="esf-edit-box-content-field-input icon-url" />
				</div>
				<div class="esf-edit-box-content-icons">
					<ul class="icons-list">
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/facebook.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/google.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/linkedin.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/twitter.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/dribble.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/instagram.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/youtube.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/skype.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/rss.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/pinterest.png"></li>
					</ul>
				</div>
			</div>
			<div class="esf-edit-box-buttons">
				<button class="esf-edit-box-buttons-cancel button" data-close="esf-edit-icon" type="button">Cancel</button>
			</div>
		</div>
	</div>

	<div class="esf-edit" id="esf-edit-button" style="display:none;height:360px">
		<div class="esf-edit-box">
			<div class="esf-edit-box-title">Edit Button</div>
			<div class="esf-edit-box-content button-box">
				<!-- <div class="esf-edit-box-content-text">Select Icon</div> -->
				<div class="esf-edit-box-content-field nth" style="padding-left: 0;">
					<label>URL: <span>(full address including http://)</span></label>
					<input style="width:100%" type="text" class="esf-edit-box-content-field-input button-url" />
				</div>
				<div class="esf-edit-box-content-button">
					<ul class="buttons-list">
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/buttons/btn-v-1.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/buttons/btn-v-2.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/buttons/btn-v-3.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/buttons/btn-v-4.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/buttons/btn-v-5.png"></li>
					</ul>
				</div>
			</div>
			<div class="esf-edit-box-buttons">
				<button class="esf-edit-box-buttons-cancel button" data-close="esf-edit-button" type="button">Cancel</button>
			</div>
		</div>
	</div>

	<div class="esf-edit" id="esf-add-icon" style="display:none;height:360px">
		<div class="esf-edit-box">
			<div class="esf-edit-box-title">Add New Icon</div>
			<div class="esf-edit-box-content icons-box">
				<!-- <div class="esf-edit-box-content-text">Select Icon</div> -->
				<div class="esf-edit-box-content-field nth" style="padding-left: 0;">
					<label>URL: <span>(full address including http://)</span></label>
					<input style="width:100%" type="text" class="esf-edit-box-content-field-input new-icon-url" />
				</div>
				<div class="esf-edit-box-content-icons">
					<ul class="new-icons-list">
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/facebook.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/google.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/linkedin.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/twitter.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/dribble.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/instagram.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/youtube.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/skype.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/rss.png"></li>
						<li><img src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/pinterest.png"></li>
					</ul>
				</div>
			</div>
			<div class="esf-edit-box-buttons">
				<input type="hidden" name="new_button" id="new-icon-url" value="" />
				<button class="esf-edit-box-buttons-cancel button" data-close="esf-add-icon" type="button">Cancel</button>
				<button class="esf-edit-box-buttons-save button button-primary" data-close="esf-add-icon" type="button">Save</button>
			</div>
		</div>
	</div>

</div>