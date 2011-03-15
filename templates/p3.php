<div class="node node-type-webform">
	<h2 class="title">WebForm</h2>
	<div class="content editors clearfix">
		<form id="webform-client-form-1" class="webform-client-form" action="" >
			
			<p id="error-summary"></p>
			
			<fieldset id="webform-component-form-group-1" class="webform-component-fieldset">
				<legend>yes or no</legend>
				<div id="webform-component-yesorno" class="webform-component-radios">
					<div id="edit-submitted-radios-select-key-yes-wrapper" class="form-item">
						<label for="edit-submitted-radios-select-key-yes" class="option">
						<input type="radio" class="form-radio" value="key-yes" name="submitted[radios][select]" id="edit-submitted-radios-select-key-yes" /> yes?</label>
					</div>
					<div id="edit-submitted-radios-select-key-no-wrapper" class="form-item">
						<label for="edit-submitted-radios-select-key-no" class="option">
						<input type="radio" class="form-radio" value="key-no" name="submitted[radios][select]" id="edit-submitted-radios-select-key-no" /> no?</label>
					</div>
				</div>			
			</fieldset>
		
			<fieldset id="weform-component-form-group-2" class="webform-component-fieldset">
				<legend>select food</legend>
				<div id="webform-component-food" class="webform-component-select">
					<div id="edit-submitted-select-apple-wrapper" class="form-item">
						<label for="edit-submitted-select-apple" class="option">
						<input type="checkbox" class="form-checkbox" checked="checked" value="apple" id="edit-submitted-select-apple" name="submitted[select][apple]" /> apple</label>
					</div>
					<div id="edit-submitted-select-orange-wrapper" class="form-item">
						<label for="edit-submitted-select-orange" class="option">
						<input type="checkbox" class="form-checkbox" value="orange" id="edit-submitted-select-orange" name="submitted[select][orange]" /> orange</label>
					</div>
					<div id="edit-submitted-select-key3-wrapper" class="form-item">
						<label for="edit-submitted-select-key3" class="option">
						<input type="checkbox" class="form-checkbox" value="key3" id="edit-submitted-select-key3" name="submitted[select][key3]" /> rice</label>
					</div>
					<div id="edit-submitted-select-key-wrapper" class="form-item">
						<label for="edit-submitted-select-key" class="option">
						<input type="checkbox" class="form-checkbox" value="key" id="edit-submitted-select-key" name="submitted[select][key]" /> noodle</label>
					</div>
				</div>
			</fieldset>
			
			<fieldset id="weform-component-form-group-3" class="webform-component-fieldset">
				<legend>info</legend>
				<div id="webform-component-tel" class="webform-component-textfield form-item">
					<label for="edit-submitted-contactinfo-tel">TEL:<span class="form-required">*</span></label>
					<input type="text" class="required number form-text" value="" size="60" id="edit-submitted-contactinfo-tel" name="submitted[contactinfo][tel]" maxlength="128" />
				</div>
				<div id="webform-component-email" class="webform-component-textfield form-item">
					<label for="edit-submitted-contactinfo-email">Email:<span class="form-required">*</span></label>
					<input type="text" class="required email form-text" value="" size="60" id="edit-submitted-contactinfo-email" name="submitted[contactinfo][email]" maxlength="128" />
				</div>
				<div id="webform-component-url" class="webform-component-textfield form-item">
					<label for="edit-submitted-contactinfo-url">URL:<span class="form-required">*</span></label>
					<input type="text" class="required url form-text" value="http://" size="60" id="edit-submitted-contactinfo-url" name="submitted[contactinfo][url]" maxlength="128" />
				</div>
				<div id="weform-component-name" class="weform-component-textfield form-item">
					<label for="edit-submitted-name">Name:<span class="form-required">*</span> </label>
					<input type="text" class="required form-text" value="" size="60" id="edit-submitted-name" name="submitted[name]" maxlength="128" />
				</div>
				<div id="weform-component-lastname" class="weform-component-textfield form-item">
					<label for="edit-submitted-lastname">Last Name: </label>
					<input type="text" class="form-text" value="" size="60" id="edit-submitted-lastname" name="submitted[lastname]" maxlength="128" />
				</div>
				<div id="webform-component-message" class="webform-component-textarea form-item">
					<label for="edit-submitted-message">Message: </label>
					<textarea class="form-textarea" id="edit-submitted-message" name="submitted[message]" rows="5" cols="60"></textarea>
				</div>
			</fieldset>
			
			<fieldset id="weform-component-form-group-4" class="webform-component-fieldset">
				<legend>options</legend>
				<div id="edit-submitted-select-your-options-wrapper" class="webform-component-select form-item">
					<label for="edit-submitted-select-your-options">your options</label>
					<select id="edit-submitted-select-your-options" class="form-select" name="your-options">
						<option selected="selected" value="">select your option...</option>
						<option value="key1">key1</option>
						<option value="key2">key2</option>
					</select>
				</div>
			</fieldset>
			
			<fieldset id="weform-component-form-group-5" class="webform-component-fieldset">
				<legend>upload</legend>
				<div id="edit-submitted-select-your-upload-wrapper" class="webform-component-select form-item">
					<label for="edit-submitted-upload">your file input</label>
					<input type="file" class="form-upload" value="" size="90" id="edit-submitted-upload" name="submitted[upload]" maxlength="128" />
				</div>
			</fieldset>
			<input type="submit" class="form-submit" value="Submit" id="edit-submit" name="op" />
		</form>
	</div>
</div>