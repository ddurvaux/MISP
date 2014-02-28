<div class="users form">
<h2>CyDefSIG Terms and Conditions</h2>
<h3>CERT.be</h3>
Copyright (c) 2014 CERT.be belongs to Belnet, Louizalaan 231, 1050 Brussels, Belgique, tel. 02/790.33.33, fax 02/790.33.34

<h3>Article 1 Object of this agreement</h3>
This Agreement contains the rules and conditions applicable to the use of the information and services offered by CERT.be at his site www.misp.be<br/>
<br/>
The user of the information and services offered by the site is legally bound by these terms.<br/>

<h3>Article 2 Intellectual Property Rights</h3>
The texts, photographs, videos, images, lay-out, trademarks or other elements are protected by the legislation on author’s rights and neighbouring rights and/or trademarks. The site is protected by the database legislation. It is forbidden to copy, reproduce, modify, translate, adapt the whole site or a part of it in any way or by any form excepted those permitted by lawful exceptions or permitted by prior written consent of CERT.be.<br/>

<h3>Article 3 Exoneration</h3>
CERT.be is not liable for incorrect or inaccurate informations and cannot give the right to financial compensation. The user or a third party cannot held CERT.be responsible for any direct or indirect damage, incidental losses, loss of profits caused by his inaccuracy or omission in the updating, the compilation, editing and interpretation of the information.<br/>
<br/>
CERT.be cannot be held responsable for the temporal breakdown or malfunctioning of the system.<br/>

<h3>Article 4 Links</h3>
This Site contains links to other websites operated by third parties. CERT.be does not verify the information they contain. CERT.be cannot be held responsible for the content of these websites.<br/>

<h3>Article 5 Litigation</h3>
The Belgian law is applicable to these terms of use. The courts of Brussels will be competent.<br/>

<h3>Article 6 Change and update of the terms of use</h3>
CERT.be may change these terms at any time without prior notice or compensation whatsoever. The amended or updated terms of use will be posted on this site and will be automaticly applicable thirty days after the posting.<br/>


<?php
if (!$termsaccepted) {
	echo $this->Form->create('User');
	echo $this->Form->hidden('termsaccepted', array('default' => '1'));
	echo $this->Form->end(__('Accept Terms', true));
}
?>
</div>
<div class="actions <?php echo $debugMode;?>">
	<ul class="nav nav-list">
		<li><a href="/users/news">News</a></li>

		<?php if(!($me['email'] == "public")): ?>
			<li><a href="/users/view/me">My Profile</a></li>
			<li><a href="/users/memberslist">Members List</a></li>
		<? endif; ?>
		<li><a href="/pages/display/doc/general">User Guide</a></li>
		<li class="active"><a href="/users/terms">Terms & Conditions</a></li>
	</ul>
</div>
