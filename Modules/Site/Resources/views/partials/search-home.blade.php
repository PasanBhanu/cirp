<form method="get" action="{{url('courses')}}">

<div class="min-search-bar">
<div class="search-feilds">
	<p class="txt-course" style="margin-top: 0px">Course Finder</p>
<select class="select-css" style="margin-top: -5px" id="test" name="nationality">
	<option style="background-color: #000; color: #FFF; border-radius: 10px; border: 2px" value="" disabled selected hidden>Nationality</option>
	<option value="Sri Lankan" @if(isset($request->nationality) && $request->nationality == 'Sri Lankan') selected @endif>Sri Lankan</option>
	<option value="International"  @if(isset($request->nationality) && $request->nationality == 'International') selected @endif>International</option>
<!--<option value="Afghan">Afghan</option>
	<option value="Albanian">Albanian</option>
	<option value="Algerian">Algerian</option>
	<option value="American">American</option>
	<option value="Argentinian">Argentinian</option>
	<option value="Australian">Australian</option>
	<option value="Austrian">Austrian</option>
	<option value="Bangladesh">Bangladeshi</option>
	<option value="Batswana">Batswana</option>
	<option value="Belgian">Belgian</option>
	<option value="Bolivian">Bolivian</option>
	<option value="Brazilian">Brazilian</option>
	<option value="British">British</option>
	<option value="Bulgarian">Bulgarian</option>
	<option value="Cambodian">Cambodian</option>

	
	<option value="Cameroonian">Cameroonian</option>
	<option value="Canadian">Canadian</option>
	<option value="Chilean">Chilean</option>
	<option value="Chinese">Chinese</option>
	<option value="Colombian">Colombian</option>
	<option value="Costa Rican">Costa Rican</option>
	<option value="Croatian">Croatian</option>
	<option value="Cuban">Cuban</option>
	<option value="Czech">Czech</option>
	<option value="Danish">Danish</option>
	<option value="Dominican">Dominican</option>
	<option value="Dutch">Dutch</option>
	<option value="Ecuadorian">Ecuadorian</option>
	<option value="Egyptian">Egyptian</option>
	<option value="Emirati">Emirati</option>
	<option value="English">English</option>
	<option value="Estonian">Estonian</option>
	<option value="Ethiopian">Ethiopian</option>
	<option value="Fijian">Fijian</option>
	<option value="Finnish">Finnish</option>
	<option value="French">French</option>
	<option value="German">German</option>
	<option value="Ghanaian">Ghanaian</option>
	<option value="Greek">Greek</option>
	<option value="Guatemalan">Guatemalan</option>
	<option value="Haitian">Haitian</option>
	<option value="Honduran">Honduran</option>
	<option value="Hungarian">Hungarian</option>
	<option value="Icelandic">Icelandic</option>
	<option value="Indian">Indian</option>
	<option value="Indonesian">Indonesian</option>
	<option value="Iranian">Iranian</option>
	<option value="Iraqi">Iraqi</option>
	<option value="Irish">Irish</option>
	<option value="Israeli">Israeli</option>
	<option value="Italian">Italian</option>
	<option value="Jamaican">Jamaican</option>
	<option value="Japanese">Japanese</option>
	<option value="Jordanian">Jordanian</option>
	<option value="Kenyan">Kenyan</option>
	<option value="Korean">Korean</option>
	<option value="Kuwaiti">Kuwaiti</option>
	<option value="Lao">Lao</option>
	<option value="Latvian">Latvian</option>
	<option value="Lebanese">Lebanese</option>
	<option value="Libyan">Libyan</option>
	<option value="Lithuanian">Lithuanian</option>
	<option value="Malaysian">Malaysian</option>
	<option value="Malian">Malian</option>
	<option value="Maltese">Maltese</option>
	<option value="Mexican">Mexican</option>
	<option value="Mongolian">Mongolian</option>
	<option value="Moroccan">Moroccan</option>
	<option value="Mozambican">Mozambican</option>
	<option value="Namibian">Namibian</option>
	<option value="Nepalese">Nepalese</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaraguan">Nicaraguan</option>
	<option value="Nigerian">Nigerian</option>
	<option value="Norwegian">Norwegian</option>
	<option value="Pakistani">Pakistani</option>
	<option value="Panamanian">Panamanian</option>
	<option value="Paraguayan">Paraguayan</option>
	<option value="Peruvian">Peruvian</option>
	<option value="Philippine">Philippine</option>
	<option value="Polish">Polish</option>
	<option value="Portuguese">Portuguese</option>
	<option value="Romanian">Romanian</option>
	<option value="Russian">Russian</option>
	<option value="Salvadorian">Salvadorian</option>
	<option value="Saudi">Saudi</option>
	<option value="Scottish">Scottish</option>
	<option value="Senegalese">Senegalese</option>
	<option value="Serbian">Serbian</option>
	<option value="Singaporean">Singaporean</option>
	<option value="Slovak">Slovak</option>
	<option value="South African">South African</option>
	<option value="Spanish">Spanish</option>
	
	<option value="Sudanese">Sudanese</option>
	<option value="Swedish">Swedish</option>
	<option value="Swiss">Swiss</option>
	<option value="Syrian">Syrian</option>
	<option value="Taiwanese">Taiwanese</option>
	<option value="Tajikistani">Tajikistani</option>
	<option value="Thai">Thai</option>
	<option value="Tongan">Tongan</option>
	<option value="Tunisian">Tunisian</option>
	<option value="Turkish">Turkish</option>
	<option value="Ukrainian">Ukrainian</option>
	<option value="Uruguayan">Uruguayan</option>
	<option value="Venezuelan">Venezuelan</option>
	<option value="Vietnamese">Vietnamese</option>
	<option value="Welsh">Welsh</option>
	<option value="Zambian">Zambian</option>
	<option value="Zimbabwean">Zimbabwean</option>-->
</select>
<select class="select-css" style="margin-top: -5px" name="study_level" required>
	<option style="background-color: #000; color: #FFF" value="" disabled selected hidden>Study Level</option>
	<option value="Undergraduate" @if(isset($request->study_level) && $request->study_level == 'Undergraduate') selected @endif>Undergraduate</option>

	<option value="Postgraduate" @if(isset($request->study_level) && $request->study_level == 'Postgraduate') selected @endif>Postgraduate</option>

	<option value="Professional" @if(isset($request->study_level) && $request->study_level == 'Professional') selected @endif>Professional</option>

	<option value="Foundation" @if(isset($request->study_level) && $request->study_level == 'Foundation') selected @endif>Foundation</option>
</select>
<select class="select-css" style="margin-top: -5px" name="delivery" required>
	<option style="background-color: #000; color: #FFF" value="" disabled selected hidden>Delivery</option>
	<option value="On Site" @if(isset($request->delivery) && $request->delivery == 'On Site') selected @endif>On Site</option>
</select>
<select class="select-css" style="margin-top: -5px" name="field" required>
	<option style="background-color: #000; color: #FFF" value="" disabled selected hidden>Field of Study</option>
	
	<option value="Psychology" @if(isset($request->field) && $request->field == 'Psychology') selected @endif>Psychology</option>
	
</select>

	<button class="go-btn" style="margin-top: -5px">GO</button>
	</div>
</div>
</form>