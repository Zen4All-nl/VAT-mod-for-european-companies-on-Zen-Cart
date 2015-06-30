<?php
// TVA_INTRACOM BEGIN
//define('ENTRY_COMPANY_ERROR', 'The Company Name must contain a minimum of ' . ENTRY_COMPANY_MIN_LENGTH . ' characters.');
define('ENTRY_COMPANY_TEXT', 'Only if you want we bill the Company for your order');
define('JS_COMPANY', '* The Company Name must have at least ' . ENTRY_COMPANY_MIN_LENGTH . ' characters.\n');
define('JS_TVA_INTRACOM', '* The European Tax number must have at least ' . ENTRY_TVA_INTRACOM_MIN_LENGTH . ' characters.\n');
define('ENTRY_TVA_INTRACOM', 'European Tax number:');
define('ENTRY_CONTROL_TVA_INTRACOM', '&nbsp;<span class="errorText">After checking, your European Tax number is not correct or does not correspond to the entered country. Leave it blank if you don\'t know it.<br />
<!-- Optional BEGIN-->For info, it must be structured like this:<br /></span>
<span class="smallText">
<strong>Austria</strong>: AT + 9 numeric and alphanumeric characters <br />
<strong>Belgium</strong>: BE + 9 numeric characters <br />
<strong>Bulgaria</strong>: BG + 9 or 10 numeric characters<br />
<strong>Cyprus</strong>: CY + 8 numeric characters + 1 alphabetic character <br />
<strong>Czech Republic</strong>: CZ + 8 or 9 or 10 numeric characters <br />
<strong>Denmark</strong>: DK + 8 numeric characters <br />
<strong>Estonia</strong>: EE + 9 numeric characters <br />
<strong>Finland</strong>: FI + 8 numeric characters <br />
<strong>France</strong>: FR + 2 chiffres (informatic key) + No. SIREN (9 figures) <br />
<strong>Germany</strong>: DE + 9 numeric characters <br />
<strong>Greece</strong>: EL + 9 numeric characters <br />
<strong>Hungary</strong>: HU + 8 numeric characters <br />
<strong>Irlande</strong>: IE + 8 numeric and alphabetic characters <br />
<strong>Italy</strong>: IT + 11 numeric characters <br />
<strong>Latvia</strong>: LV + 11 numeric characterss <br />
<strong>Lithuania</strong>: LT + 9 or 12 numeric characters <br />
<strong>Luxembourg</strong>: LU + 8 numeric characters <br />
<strong>Malta</strong>: MT + 8 numeric characters <br />
<strong>Netherlands</strong>: NL + 12 alphanumeric characters, one of them a letter <br />
<strong>Poland</strong>: PL + 10 numeric characters <br />
<strong>Portugal</strong>: PT + 9 numeric characters <br />
<strong>Slovakia</strong>: SK + 9 or 10 numeric characters <br />
<strong>Spain</strong>: ES + 9 characters <br />
<strong>Sweden</strong>: SE + 12 numeric characters <br />
<strong>United Kingdom</strong>: GB + 5 to 9 numeric characters <br />
<strong>Romania</strong>: RO + 2 to 9 numeric characters <br />
<strong>Slovenia</strong>: SI + 8 numeric characters <br />
<!-- Optional END-->');
define('ENTRY_TVA_INTRACOM_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_TVA_INTRACOM_MIN_LENGTH . ' chars.</span>');
define('ENTRY_NO_VERIF_TVA_INTRACOM', '&nbsp;<span class="errorText">Impossible to check your European Tax number: leave blank</span>');
define('ENTRY_SHOP_INTRACOM', 'European Tax number of the shop :');
// TVA_INTRACOM END
