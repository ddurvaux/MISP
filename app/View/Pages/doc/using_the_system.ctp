<div class="actions <?php echo $debugMode;?>">
	<ol class="nav nav-list">
			<li><?php echo $this->Html->link('Quick Start', array('controller' => 'pages', 'action' => 'display', 'doc', 'quickstart')); ?></li>
			<li><?php echo $this->Html->link('General Layout', array('controller' => 'pages', 'action' => 'display', 'doc', 'general')); ?></li>
			<li><?php echo $this->Html->link('General Concepts', array('controller' => 'pages', 'action' => 'display', 'doc', 'concepts')); ?></li>
			<li><?php echo $this->Html->link('User Management and Global actions', array('controller' => 'pages', 'action' => 'display', 'doc', 'user_management')); ?></li>
			<li class="active"><?php echo $this->Html->link('Using the system', array('controller' => 'pages', 'action' => 'display', 'doc', 'using_the_system')); ?>
			<ul class="nav nav-list">
				<li><a href="#create">Creating an event</a></li>
				<li><a href="#browsing_events">Browsing past events</a></li>
				<li><a href="#update_events">Updating and modifying events</a></li>
				<li><a href="#contact">Contacting the publisher</a></li>
				<li><a href="#automation">Automation</a></li>
				<li><a href="#export">Exporting data</a></li>
				<li><a href="#connect">Connecting to other servers</a></li>
				<li><a href="#rest">Rest API</a></li>
			</ul>
		</li>
		<li><?php echo $this->Html->link('Administration', array('controller' => 'pages', 'action' => 'display', 'doc', 'administration')); ?></li>
		<li><?php echo $this->Html->link('Categories and Types', array('controller' => 'pages', 'action' => 'display', 'doc', 'categories_and_types')); ?></li>
	</ol>
</div>
<div class="index">
<h2>Using the system:</h2>
<a id="create"></a><h3>Creating an event:</h3>
The process of entering an event can be split into 3 phases, the creation of the event itself, populating it with attributes
and attachments and finally publishing it.<br /><br />
	During this first step, you will be create a basic event without any actual attributes, but storing general information such as a description, time and risk level of the incident. To start creating the event, click on the New Event button on the left and fill out the form you are presented with. The following fields need to be filled out:<br /><br />
	<p><img src="/img/doc/add_event.png" alt = "" style="float:right;" title = "Fill this form out to create a skeleton event, before proceeding to populate it with attributes and attachments."/></p>
	<ul>
		<li><b>Date:</b> The date when the incident has happened.<br /><br /></li>
		<li><b>Distribution:</b>
			<a id="distribution"></a>This setting controls, who will be able to see this event once it becomes published and eventually when it becomes pulled.
			Apart from being able to set which users on this server are allowed to see the event, this also controls whether
			the event will be synchronised to other servers or not. The distribution is inherited by attributes: the most restrictive setting wins.
			The following options are available:<br /><br /></li>
		<li style="list-style: none;">
			<ul>
			<li><i>Your organization only:</i> This setting will only allow members of your organisation to see this. It can be pulled to another instance by one of your organisation members where only your organisation will be able to see it.
				Events with this setting will not be synchronised.<br />
				Upon push: do not push. Upon pull : pull.
				<br /><br /></li>
			<li><i>This Community-only:</i> Users that are part of your MISP community will be able to see the event.
				This includes your own organisation, organisations on this MISP server and organisations running MISP
				servers that synchronise with this server. Any other organisations connected to such linked servers will
				be restricted from seeing the event.<br />
				Upon push: do not push. Upon pull: pull and downgrade to Your organization only.
				<br /><br /></li>
			<li><i>Connected communities:</i> Users that are part of your MISP community will be able to see the event.
				This includes all organisations on this MISP server, all organisations on MISP servers synchronising
				with this server and the hosting organisations of servers that connect to those afore mentioned servers
				(so basically any server that is 2 hops away from this one). Any other organisations connected to linked
				servers that are 2 hops away from this own will be restricted from seeing the event. For more information
				on community-related distribution levels, click here.<br/>
				Upon push: downgrade to This Community only and push. Upon pull: pull and downgrade to This Community only.
				<br /><br /></li>
			<li><i>All communities:</i> This will share the event with all MISP communities, allowing the event to be
				freely propagated from one server to the next.<br/>
				Upon push: push. Upon pull: pull.
				<br /><br /></li>
			</ul>
		</li>
		<li><b>Risk:</b> This field indicates the risk level of the event. Incidents can be categorised into three different threat categories (low, medium, high). This field can alternatively be left as undefined. The 3 options are:</li>
		<li style="list-style: none;"><ul>
			<li><i>Low:</i> General mass malware.</li>
			<li><i>Medium:</i> Advanced Persistent Threats (APT)</li>
			<li><i>High:</i> Sophisticated APTs and 0day attacks.<br /><br /></li>
		</ul></li>
		<li><b>Analysis:</b> Indicates the current stage of the analysis for the event, with the following possible options:</li>
		<li style="list-style: none;"><ul>
			<li><i>Initial:</i> The analysis is just beginning</li>
			<li><i>Ongoing:</i> The analysis is in progress</li>
			<li><i>Completed:</i> The analysis is complete<br /><br /></li>
		</ul></li>
		<li><b>Info:</b> The info field, where the malware/incident can get a brief description starting with the internal reference. This field should be as brief and concise as possible, the more detailed description happens through attributes in the next stage of the event's creation. Keep in mind that the system will automatically replace detected text strings that match a regular expression entry set up by your server's administrator(s). <br /><br /></li>
		<li><b>GFI Sandbox:</b> It is possible to upload the exported .zip file from GFI sandbox with the help of this tool. These will be dissected by the MISP and a list of attributes and attachments will automatically be generated from the .zip file. Whilst this does most of the work needed to be done in the second step of the event's creation, it is important to manually look over all the data that is being entered. <br /><br /></li>
	</ul>
<hr />
<a id="create_attribute"></a><h3>Add attributes to the event:</h3>
The second step of creating an event is to populate it with attributes and attachments. In addition to being able to import the attributes and attachments from GFI, it is also possible to manually add attributes and attachments to an event, by using the two appropriate buttons on the event's page. Let's look at adding attributes first.<br />
When clicking on the add attribute button, you will have to fill out a form with all the data about the attribute.<br /><br />
Keep in mind that the system searches for regular expressions in the value field of all attributes when entered, replacing detected strings within it as set up by the server's administrator (for example to enforce standardised capitalisation in paths for event correlation or to bring exact paths to a standardised format). The following fields need to be filled out:<br />
<p><img src="/img/doc/add_attribute.png" alt = "Add attribute" style="float:right;" title = "This form allows you to add attributes."/></p><br />
<ul>
	<li><b>Category:</b> This drop-down menu explains the category of the attribute, meaning what aspect of the malware this attribute is describing. This could mean the persistence mechanisms of the malware or network activity, etc. For a list of valid categories, <?php echo $this->Html->link(__('click here', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'categories_and_types')); ?><br /><br /></li>
		<li><b>Type:</b> Whilst categories determine what aspect of an event they are describing, the Type explains by what means that aspect is being described. As an example, the source IP address of an attack, a source e-mail address or a file sent through an attachment can all describe the payload delivery of a malware. These would be the types of attributes with the category of payload deliver. For an explanation of what each of the types looks like together with the valid combinations of categories and types, <?php echo $this->Html->link(__('click here', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'categories_and_types')); ?>.<br /><br /></li>
		<li><b>Distribution:</b> This drop-down list allows you to control who will be able to see this attribute.
		The distribution is inherited by attributes: the most restrictive setting wins.
		For more info <a href="#distribution">click here</a>.<br /><br /></li>
		<li><b>Contextual Comment:</b> Add a comment to the attribute. This will not be used for correlation<br /><br /></li>
		<li><b>IDS Signature:</b> This option allows the attribute to be used as an IDS signature when exporting the NIDS data, unless it is being overruled by the white-list. For more information about the whitelist, head over to the <?php echo $this->Html->link(__('administration', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'administration', '#' => 'whitelist')); ?> section.<br /><br /></li>
		<li><b>Value:</b> The actual value of the attribute, enter data about the value based on what is valid for the chosen attribute type. For example, for an attribute of type ip-src (source IP address), 11.11.11.11 would be a valid value. For more information on types and values, <?php echo $this->Html->link(__('click here', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'categories_and_types')); ?>.<br /><br /></li>
		<li><b>Batch import:</b> If there are several attributes of the same type to enter (such as a list of IP addresses, it is possible to enter them all into the same value-field, separated by a line break between each line. This will allow the system to create separate lines for the each attribute. <br /><br /></li>
</ul>
<hr />
<h3>Propose a change to an event that belongs to another organisation</h3>
If you would like to propose a modification to an attribute, or to propose some additional attributes to the creating organisation, you can do this with the buttons that replace the add attribute field on the left and the edit icon on the right end of each listed attribute in the event view. The creating organisation of the event will be able to see any proposals and discard or accept the changes.
<p><img src="/img/doc/proposal.png" alt = "Propose attribute" title = "An attribute with a proposal attached will turn blue and the proposal itself will be grey. If there is a grey proposal without a blue attribute infront of it, it means that someone has proposed a new attribute"/></p><br />
If the organisation that has created the event is on another connected server, they will be able to accept the proposal once they initiate a pull and receive your proposal. After this they can republish the event, sending the altered attribute back to your instance. 
<hr />
<h3>Add attachments to the event:</h3>
You can also upload attachments, such as the malware itself, report files from external analysis or simply artifacts dropped by the malware. Clicking on the add attachment button brings up a form that allows you to quickly attach a file to the event. The following fields need to be filled out:<br /><br />
<p><img src="/img/doc/add_attachment.png" alt = "Add attachment" title = "Point the uploader to the file you want to upload. Make sure to mark it as malware if the uploaded file is harmful, that way it will be neutralised."/></p><br />
<ul>
	<li><b>Category:</b> The category is the same as with the attributes, it answers the question of what the uploaded file is meant to describe.<br /><br /></li>
	<li><b>Upload field:</b> By hitting browse, you can browse your file system and point the uploader to the file that you want to attach to the attribute. This will then be uploaded when the upload button is pushed.<br /><br /></li>
	<li><b>Malware:</b> This check-box marks the file as malware and as such it will be zipped and passworded, to protect the users of the system from accidentally downloading and executing the file. Make sure to tick this if you suspect that the filed is infected, before uploading it.<br /><br /></li>
	<li><b>Distribution:</b> This drop-down list allows you to control who will be able to see this attachment.
		The distribution is inherited by attributes: the most restrictive setting wins.
		For more info <a href="#distribution">click here</a>.<br /><br /></li>
</ul>
<hr />
<h3>Populate from IOC</h3>
It is also possible to attempt to import the data contained in a .ioc file, The import tool will attempt to gather as many IndicatorItems within nested logical operators as possible without breaking their validity. After the procedure is done, you'll be presented with a list of successfully created attributes and a list of failed IndicatorItems as well as a graph of the .ioc file.
<p><img src="/img/doc/ioc1.png" alt = "OpenIOC1" title = "The import tool will list the successful and failed entries after the process is done."/></p><br />
<p><img src="/img/doc/ioc2.png" alt = "OpenIOC2" title = "You'll also be able to see a graph of the imported .ioc file and how successful the import was."/></p><br />
<hr />
<h3>Publish an event:</h3>
<p><img src="/img/doc/publish.png" alt = "Publish" style="float:right;" title = "Only use publish (no email) for minor changes such as the correction of typos."/></p><br />
Once all the attributes and attachments that you want to include with the event are uploaded / set, it is time to finalise its creation by publishing the event (click on publish event in the event view). This will alert the eligible users of it (based on the private-controls of the event and its attributes/attachments and whether they have auto-alert turned on), push the event to instances that your instance connects to and propagate it further based on the distribution rules. It also readies the network related attributes for NIDS signature creation (through the NIDS signature export feature, for more information, go to the export section.).<br /><br />
There is an alternate way of publishing an event without alerting any other users, by using the "publish (no email)" button. This should only be used for minor edits (such as correcting a typo). <br />
<hr />
<a id="browsing_events"></a><h2>Browsing past events:</h2>
The MISP interface allows the user to have an overview over or to search for events and attributes of events that are already stored in the system in various ways.<br /><br />
<h3>To list all events:</h3>
On the left menu bar, the option "List events" will generate a list of the last 60 events. While the attributes themselves aren't shown in this view, the following pieces of information can be seen:<br /><br />
<img src="/img/doc/list_events2.png" alt = "List events" title = "This is the list of events in the system. Use the buttons to the right to alter or view any of the events."/><br /><br />
	<ul>
		<li><b>Valid.:</b> Validation, an event that has been published counts as validated, marked by a checkmark. Unpublished events are marked by a cross.<br /><br /></li>
		<li><b>Org:</b> The organisation that created the event.<br /><br /></li>
		<li><b>Owner Org:</b> The organisation that owns the event on this instance. This field is only visible to administrators. <br /><br /></li>
		<li><b>ID:</b> The event's ID number, assigned by the system when the event was first entered (or in the case of an event that was synchronized, when it was first copied over - more on synchronisation in chapter xy)<br /><br /></li>
		<li><b>Tags:</b> Tags that are assigned to this event.<br /><br /></li>
		<li><b>#:</b> The number of attributes that the event has.<br /><br /></li>
		<li><b>Email:</b> The e-mail address of the event's reporter.<br /><br /></li>
		<li><b>Date:</b> The date of the attack.<br /><br /></li>
		<li><b>Risk:</b> The risk level of the attack, the following levels are possible:<br /><br /></li>
		<li style="list-style: none;"><ul>
			<li><b>Low:</b> General Malware</li>
			<li><b>Medium:</b> Advanced Persistent Threats (APTs)</li>
			<li><b>High:</b> Sophisticated APTs and 0day exploits</li>
			<li><b>Undefined:</b> This field can be left undefined and edited at a later date.<br /><br /></li>
		</ul>
		<li><b>Analysis:</b> Indicates the current stage of the analysis for the event, with the following possible options:<br /><br /></li>
		<li style="list-style: none;"><ul>
			<li><b>Initial:</b> The analysis is just beginning</li>
			<li><b>Ongoing:</b> The analysis is in progress</li>
			<li><b>Completed:</b> The analysis is complete<br /><br /></li>
		</ul></li>
		<li><b>Info:</b> A short description of the event, starting with an internal reference number.<br /><br /></li>
		<li><b>Distribution:</b> This field indicates what the sharing privileges of the event. The options are described <a href="#distribution">here</a>.<br /><br /></li>
		<li><b>Actions:</b> The controls that the user has to view or modify the event. The possible actions that are available (depending on user privileges - <?php echo $this->Html->link(__('click here', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'administration', '#' => 'roles')); ?> to find out more about privileges):<br /><br /></li>
		<li style="list-style: none;"><ul>
			<li><b>Publish:</b> Publishing an event will have several effects: The system will e-mail all eligible users that have auto-alert turned on (and having the needed privileges for the event, depending on its private classification) with a description of your newly published event, it will be flagged as published and it will be pushed to all eligible servers (to read more about synchronisation between servers, have a look at the <?php echo $this->Html->link(__('section on connecting servers', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'using_the_system', '#' => 'connect')); ?>).</li>
			<li><b>Edit:</b> Clicking on the edit button will bring up the same same screen as the one used for creating new events, with the exception that all fields come filled out with the data of the event that is being edited. The distribution of an event can only be edited if you are a user of the creating organisation of the event. For more information on this view, refer to the section on <a href="#create">creating an event</a>.</li>
			<li><b>Delete:</b> The system will prompt you before erasing the unwanted event.</li>
			<li><b>View:</b> Will bring up the event view, which besides the basic information contained in the event list, will also include the following:<br /><br />
		</ul></li>
		<h3>Filters</h3>It is also possible to filter the events shown by clicking on the small magnifying glass icons next to the field names and entering a filter term.<br /><br />
		<h3>Event view</h3>
		<img src="/img/doc/event_detail.png" alt = "Event" title = "This view includes the basic information about an event, a link to related events, all attributes and attachments with tools to modify or delete them and extra functions for publishing the event or getting in touch with the event's reporter."/><br /><br /></li>
		<li><b>List of related events:</b> Events can be related by having one or more attributes that are exact matches. For example, if two events both contain a source IP attribute of 11.11.11.11 then they are related. The list of events that are related the currently shown one, are listed under "Related Events", as links (titled the related event's date and ID number) to the events themselves.<br /><br /></li>
		<li><b>Attributes:</b> A list of all attributes attached to the event, including its category, type, value, whether the attribute in itself is related to another event, whether the flag signalling that the attribute can be turned into an IDS signature is on, and a field showing the current privacy setting of the attribute.Attributes can also be modified or deleted via the 3 buttons at the end of each line.<br /><br />
		Using the modify button will bring up the attribute creation view, with all data filled out with the attribute's currently stored data.<br /><br /></li>
		<li><b>Event History:</b> View the logs of the event that show how the event has changed over time, including the contribution from other organisations in the form of proposals.<br /><br /></li>
		<li><b>Contributors:</b> Shows a list of the organisations that have contributed to the event via proposals. If you click any of the logos listed here, you'll get redirected to a filtered event history view, including only the changes made by the organisation.</li>
	</ul>
<hr />
<h3>Listing all attributes:</h3>
	Apart from having a list of all the events, it is also possible to get a list of all the stored attributes in the system by clicking on the list attributes button. The produced list of attributes will include the followings fields:<br /><br />
	<img src="/img/doc/list_attributes2.png" alt = "" title = "Use the buttons to the right to view the event that this attribute belongs to or to modify/delete the attribute."/><br /><br />
	<ul>
		<li><b>Event:</b> This is the ID number of the event that the attribute is tied to. If an event belongs to your organisation, then this field will be coloured red.<br /><br /></li>
		<li><b>Org:</b> The organisation that has created the event.</li>
		<li><b>Category:</b> The category of the attribute, showing what the attribute describes (for example the malware's payload). For more information on categories, go to section xy<br /><br /></li>
		<li><b>Type:</b> The type of the value contained in the attribute (for example a source IP address). For more information on types, go to section xy<br /><br /></li>
		<li><b>Value:</b> The actual value of the attribute, describing an aspect, defined by the category and type fields of the malware (for example 11.11.11.11).<br /><br /></li>
		<li><b>Signature:</b> Shows whether the attribute has been flagged for NIDS signature generation or not.<br /><br /></li>
		<li><b>Actions:</b> A set of buttons that allow you to view the event that the attribute is tied to, to edit the attribute (using the same view as what is used to set up attributes, but filled out with the attribute's current data) and a delete button. <br /><br /></li>
	</ul>
<hr />
<h3>Searching for attributes:</h3>
Apart from being able to list all events, it is also possible to search for data contained in the value field of an attribute, by clicking on the "Search Attributes" button.<br /><br />
<img src="/img/doc/search_attribute.png" alt = "Search attribute" title = "You can search for attributes by searching for a phrase contained in its value. Narrow your search down by selecting a type and/or a category which the event has to belong to."/><br /><br />
This will bring up a form that lets you enter one or several search strings (separate search strings with line breaks) that will be compared to the values of all attributes, along with options to narrow down the search based on category and type. The entered search string has to be an exact match with (the sub-string of) a value. A second text field makes it possible to enter event IDs for events that should be excluded from the search (again, each line represents an event ID to be excluded).<br /><br />
The list generated by the search will look exactly the same as listing all attributes, except that only the attributes that matched the search criteria will be listed (to find out more about the list attributes view, <?php echo $this->Html->link(__('click here', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'categories_and_types')); ?>.). The search parameters will be shown above the produced list and the search terms will be highlighted.<br />
<br /><img src="/img/doc/search_attribute_result.png" alt = "" title = "You can view the event that an attribute belongs to with the view button, or you can edit/delete the attribute via the buttons on the right."/><br />
<hr />
<a id="update_events"></a><h2>Updating and modifying events and attributes:</h2>
Every event and attribute can easily be edited. First of all it is important to find the event or attribute that is to be edited, using any of the methods mentioned in the section on <a href="#browsing_events">browsing past events</a>.<br /><br />
Once it is found, the edit button (whether it be under actions when events/attributes get listed or simply on the event view) will bring up the same screen as what is used to create the entry of the same type (for an event it would be the event screen as <a href="#create">seen here</a>, for an attribute the attribute screen as <a href="#create_attribute">described here</a>).<br /><br />
Keep in mind that editing any event (either directly or indirectly through an attribute) will unpublish it, meaning that you'll have to publish it (through the event view) again once you are done.<br /><br />
 <hr />
<a id="contact"></a><h2>Contacting the reporter:</h2>
To get in touch with the reporter of a previously registered event, just find the event for which you would like to contact the reporter by either finding it on the list of events, by finding it through one of its attributes or by finding it through a related event.<br /><br />
Once the event is found and the event view opened, click the button titled "Contact Reporter". This will bring up a view where you can enter your message that is to be e-mailed to all members of the reporting organisation that subscribe to receiving such reports or the reporting user himself. Along with your message, the detailed information about the event in question will be included in the e-mail.<br /><br />
<br /><img src="/img/doc/contact_reporter.png" alt = "" title = "Enter your message to the reporter and choose whether his/her entire organisation should get the message or not by ticking the check-box."/><br /><br />
By default, the message will be sent to every member of the organisation that posted the event in the first place, but if you tick the check-box below the message field before sending the mail, only the person that reported the event will get e-mailed. <br />
<hr />
<a id="automation"></a><h2>Automation:</h2>
It is possible to quickly and conveniently export the data contained within the system using the automation features located in the main menu on the left (available to users with authentication key access only). There are various sets of data that can be exported, by using the authentication key provided by the system (also shown on the export page). If for whatever reason you would need to invalidate your current key and get a new one instead (for example due to the old one becoming compromised) just hit the reset link next to the authentication key in the export view or in your "my profile" view.<br /><br />
The following types of export are possible:<br /><br />
	<h3>XML export:</h3>
		Exports all attributes and the event data of every single event in the database (that you are eligible to see) in the XML format. The usage is:<br /><br /><i>&lt;server&gt;/events/xml/&lt;authentication_key&gt;</i><br /><br />
		In order to export the data about a single event and its attributes, use the following syntax:<br /><br />
		<i>&lt;server&gt;/events/xml/&lt;authentication_key&gt;/&lt;EventID&gt;</i><br /><br />
	<h3>NIDS export:</h3>
		This allows the user to export all network related attributes (that you are eligible to see) under the Snort format. The attributes have to belong to a published event and they have to have IDS signature generation enabled. The types that will be used when creating the export are: email-dst, ip-src, ip-dst, snort, url, domain. The usage is as follows:<br /><br /><i>&lt;server&gt;/events/nids/&lt;authentication_key&gt;</i><br /><br />
	<h3>Hash database export:</h3>
		There are two hash formats (sha1 and md5) in which all filenames stored in the system can be exported. Events need to be published and the IDS Signature field needs to be turned on for this export. The usage is as follows:<br /><br />
		For MD5: <i>&lt;server&gt;events/hids_md5/&lt;authentication_key&gt;</i><br /><br />
		For SHA1: <i>&lt;server&gt;events/hids_sha1/&lt;authentication_key&gt;</i><br /><br />
	<h3>Text export:</h3>
		It is also possible to export a list of all eligible attributes that match a specific type into a plain text file. The format to do this is:<br /><br />
		<i>&lt;server&gt;/events/text/&lt;authentication_key&gt;/&lt;type&gt;</i><br /><br />
		Type could be any valid type (as according to the list of <?php echo $this->Html->link(__('categories and types', true), array('controller' => 'pages', 'action' => 'display', 'doc', 'categories_and_types')); ?>), for example md5, ip-src or comment.<br />
<hr />
<a id="export"></a><h2>Exporting data:</h2>
For users that do not have authentication key access, an alternate export feature is available that relies on your interactive login to the site. To access these, just use the automation menu button to the left and you'll be presented with a list of export options. The results of the export will automatically be offered as a file download.<br /><br/>
<br /><img src="/img/doc/export.png" alt = "" title = "Use the export features here to quickly download data in various formats"/><br /><br />
Apart from that, it's also possible to export all events involved in a search attribute result table, by using the "Download results as XML" button on the left menu bar. <br /><br />
<br /><img src="/img/doc/export_search.png" alt = "" title = "Download a .xml from all the events that are shown through an attribute in the search results."/><br /><br />
Each event's view has its own export feature, both as an XML export and as a .ioc file. To reach these features, just navigate to an event and use the appropriate buttons on the right side.<br /><br />
<br /><img src="/img/doc/export_event.png" alt = "" title = "Download a .xml or a .ioc of the event."/><br /><br />
<hr />
<h2><a id="connect"></a>Connecting to other instances:</h2>
Apart from being a self contained repository of attacks/malware, one of the main features of MISP is its ability to connect to other instances and share (parts of) its information. The following options allow you to set up and maintain such connections.<br /><br />
<h3><a id="new_server"></a>Setting up a connection to another server:</h3>
In order to share data with a remote server via pushes and pulls, you need to request a valid authentication key from the hosting organisation of the remote instance. When clicking on List Servers and then on New Server, a form comes up that needs to be filled out in order for your instance to connect to it. The following fields need to be filled out:<br /><br />
<p><img src="/img/doc/add_server.png" alt ="Add server" title = "Make sure that you enter the authentication key that you have been given by the hosting organisation of the remote instance, instead of the one you have gotten from this one."/></p><br />
<ul>
	<li><b>Base URL:</b> The URL of the remote server.<br /><br /></li>
	<li><b>Organization:</b> The organisation that runs the remote server. It is very impoportant that this setting is filled out exactly as the organisation name set up in the bootstrap file of the remote instance.<br /><br /></li>
	<li><b>Authkey:</b> The authentication key that you have received from the hosting organisation of the remote instance.<br /><br /></li>
	<li><b>Push:</b> This check-box controls whether your server is allowed to push to the remote instance.<br /><br /></li>
	<li><b>Pull:</b> This check-box controls whether your server can request to pull all data from the remote instance.<br /><br /></li>
</ul>
<b>If you are an administrator</b>, trying to allow another instance to connect to your own, it is vital that two rules are followed when setting up a synchronisation account: <br /><br />
<ul>
	<li>The synchronisation user has to have the sync permission and full read/write/publish privileges turned on<br /><br /></li>
	<li>Both the sync user and the organisation setting in your instance's Config/bootstrap.php file have to match the organisation identifier of the hosting organisation.<br /><br /></li>
</ul>
<h3>Browsing the currently set up server connections and interacting with them:</h3>
If you ever need to change the data about the linked servers or remove any connections, you have the following options to view and manipulate the server connections, when clicking on List Servers: (you will be able to see a list of all servers that your server connects to, including the base address, the organisation running the server the last pushed and pulled event IDs and the control buttons.).<br /><br />
<p><img src="/img/doc/list_servers.png" alt = "" title = "Apart from editing / deleting the link to the remote server, you can issue a push all or pull all command from here."/></p><br />
<ul>
	<li><b>Editing the connection to the:</b> By clicking edit a view, <a href=#new_server>that is identical to the new instance view</a>, is loaded, with all the current information of the instance pre-entered.<br /><br /></li>
	<li><b>Deleting the connection to the instance:</b> Clicking the delete button will delete the link to the instance.<br /><br /></li>
	<li><b>Push all:</b> By clicking this button, all events that are eligible to be pushed on the instance you are on will start to be pushed to the remote instance. Events and attributes that exist on the far end will be updated.<br /><br /></li>
	<li><b>Pull all:</b> By clicking this button, all events that are set to be pull-able or full access on the remote server will be copied to this instance. Existing events will not be updated.<br /><br /></li>
</ul>
<hr />
<a id="rest"></a><h2>Rest API:</h2>
The platform is also <a href="http://en.wikipedia.org/wiki/Representational_state_transfer">RESTfull</a>, so this means that you can use structured format (XML) to access Events data.<br /><br />
<h3>Requests</h3>
Use any HTTP compliant library to perform requests. However to make clear you are doing a REST request you need to either specify the Accept type to application/xml, or append .xml to the url<br /><br />
The following table shows the relation of the request type and the resulting action:<br /><br />

<table style="width:250px;" summary="">
<colgroup>
<col width="18%">
<col width="34%">
<col width="48%">
</colgroup>
<thead valign="bottom">
<tr><th class="head">HTTP format</th>
<th class="head">URL</th>
<th class="head">Controller action invoked</th>
</tr>
</thead>
<tbody valign="top">
<tr><td>GET</td>
<td>/events</td>
<td>EventsController::index() <sup>(1)</sup></td>
</tr>
<tr><td>GET</td>
<td>/events/123</td>
<td>EventsController::view(123) <sup>(2)</sup></td>
</tr>
<tr><td>POST</td>
<td>/events</td>
<td>EventsController::add()</td>
</tr>
<tr><td>PUT</td>
<td>/events/123</td>
<td>EventsController::edit(123)</td>
</tr>
<tr><td>DELETE</td>
<td>/events/123</td>
<td>EventsController::delete(123)</td>
</tr>
<tr><td>POST</td>
<td>/events/123</td>
<td>EventsController::edit(123)</td>
</tr>
</tbody>
</table>
<small>(1) Warning, there's a limit on the number of results when you call <code>index</code>.</small><br/>
<small>(2) Attachments are included using base64 encoding below the <code>data</code> tag.</small><br/>
<br/>
<h3>Authentication</h3>
<p>REST being stateless you need to authenticate your request by using your <?php echo $this->Html->link(__('authkey/apikey', true), array('controller' => 'users', 'action' => 'view', 'me')); ?>. Simply set the <code>Authorization</code> HTTP header.</p>
<h3>Example - Get single Event</h3>
<p>In this example we fetch the details of a single Event (and thus also his Attributes).<br/>
The request should be:</p>
<pre>GET <?php echo Configure::read('MISP.baseurl');?>/events/123</pre>
<p>And with the HTTP Headers:</p>
<pre>Accept: application/xml
Authorization: XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</pre>
<p>The response you're going to get is the following data:</p>
<pre>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot; standalone=&quot;no&quot;?&gt;
&lt;response&gt;
	&lt;Event&gt;
		&lt;id&gt;57&lt;/id&gt;
		&lt;date&gt;2012-11-19&lt;/date&gt;
		&lt;risk&gt;Undefined&lt;/risk&gt;
		&lt;info&gt;Test&lt;/info&gt;
		&lt;user_id&gt;1&lt;/user_id&gt;
		&lt;published&gt;0&lt;/published&gt;
		&lt;uuid&gt;50aa54aa-f7a0-4d74-910d-10f0ff32448e&lt;/uuid&gt;
		&lt;revision&gt;0&lt;/revision&gt;
		&lt;private&gt;0&lt;/private&gt;
		&lt;attribute_count&gt;0&lt;/attribute_count&gt;
		&lt;communitie&gt;0&lt;/communitie&gt;
		&lt;distribution&gt;This Community-only&lt;/distribution&gt;
		&lt;Attribute&gt;
			&lt;id&gt;9577&lt;/id&gt;
			&lt;event_id&gt;123&lt;/event_id&gt;
			&lt;category&gt;Artifacts dropped&lt;/category&gt;
			&lt;type&gt;other&lt;/type&gt;
			&lt;to_ids&gt;1&lt;/to_ids&gt;
			&lt;uuid&gt;50aa54bd-adec-4544-b494-10f0ff32448e&lt;/uuid&gt;
			&lt;revision&gt;1&lt;/revision&gt;
			&lt;private&gt;0&lt;/private&gt;
			&lt;cluster&gt;0&lt;/cluster&gt;
			&lt;communitie&gt;0&lt;/communitie&gt;
			&lt;value&gt;0&lt;/value&gt;
			&lt;distribution&gt;0&lt;/distribution&gt;
		&lt;/Attribute&gt;
	&lt;/Event&gt;
&lt;/response&gt;</pre>

<h4>Example - Add new Event</h4>
<p>In this example we want to add a single Event.<br/>
The request should be:</p>
<pre>POST <?php echo Configure::read('MISP.baseurl');?>/events
Accept: application/xml
Authorization: XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</pre>
<p>And the request body:</p>
<pre>&lt;Event&gt;
	&lt;id&gt;14&lt;/id&gt;
	&lt;org&gt;ORG&lt;/org&gt;
	&lt;date&gt;2012-11-26&lt;/date&gt;
	&lt;risk&gt;Undefined&lt;/risk&gt;
	&lt;info&gt;Event information&lt;/info&gt;
	&lt;user_id&gt;1&lt;/user_id&gt;
	&lt;alerted&gt;0&lt;/alerted&gt;
	&lt;uuid&gt;4f8c2c4e-00dc-42c9-83ad-76e9ff32448e&lt;/uuid&gt;
	&lt;private&gt;0&lt;/private&gt;
	&lt;published&gt;0&lt;/published&gt;
	&lt;Attribute&gt;
		&lt;id&gt;116&lt;/id&gt;
		&lt;event_id&gt;14&lt;/event_id&gt;
		&lt;type&gt;ip-dst&lt;/type&gt;
		&lt;category&gt;Network activity&lt;/category&gt;
		&lt;to_ids&gt;1&lt;/to_ids&gt;
		&lt;uuid&gt;4f8c2cc3-0410-4bf0-8559-5b9dff32448e&lt;/uuid&gt;
		&lt;revision&gt;1&lt;/revision&gt;
		&lt;private&gt;0&lt;/private&gt;
		&lt;value&gt;1.1.1.111&lt;/value&gt;
		&lt;category_order&gt;g&lt;/category_order&gt;
	&lt;/Attribute&gt;
	&lt;Attribute&gt;
		&lt;id&gt;117&lt;/id&gt;
		&lt;event_id&gt;14&lt;/event_id&gt;
		&lt;type&gt;malware-sample&lt;/type&gt;
		&lt;category&gt;Payload delivery&lt;/category&gt;
		&lt;to_ids&gt;0&lt;/to_ids&gt;
		&lt;uuid&gt;4f8c2d08-7e6c-4648-8730-50a7ff32448e&lt;/uuid&gt;
		&lt;revision&gt;1&lt;/revision&gt;
		&lt;private&gt;0&lt;/private&gt;
		&lt;value&gt;.doc|3f6f1aaab6171925c81de9b34a8fcf8e&lt;/value&gt;
		&lt;category_order&gt;c&lt;/category_order&gt;
		&lt;data /&gt;
	&lt;/Attribute&gt;
&lt;/Event&gt;</pre>
<p>The response you're going to get is the following data:</p>
<pre>
HTTP/1.1 100 Continue
HTTP/1.1 200 Continue
Date: Mon, 26 Nov 2012 14:17:11 GMT
Server: Apache/2.2.13 (Win32) PHP/5.2.10
X-Powered-By: PHP/5.2.10
Set-Cookie: CAKEPHP=deleted; expires=Sun, 27-Nov-2012 14:17:11 GMT; path=/
Set-Cookie: CAKEPHP=a4ok3lr5p9n5drqj27025i4le3; expires Mon, 26-Nov-2012 18:17:11 GMT; path=/; HttpOnly
Content-Length: 1466
Content-Type: application/xml

&lt;?xml version="1.0" encoding="UTF-8"&gt;
&lt;response&gt;
	&lt;Event&gt;
		&lt;id&gt;14&lt;/id&gt;
		&lt;org&gt;ORG&lt;/org&gt;
		&lt;date&gt;2012-11-26&lt;/date&gt;
		&lt;risk&gt;Undefined&lt;/risk&gt;
		&lt;info&gt;Event information&lt;/info&gt;
		&lt;user_id&gt;1&lt;/user_id&gt;
		&lt;published&gt;0&lt;/published&gt;
		&lt;uuid&gt;4f8c2c4e-00dc-42c9-83ad-76e9ff32448e&lt;/uuid&gt;
		&lt;revision&gt;0&lt;/revision&gt;
		&lt;private&gt;0&lt;/private&gt;
		&lt;attribute_count&gt;0&lt;/attribute_count&gt;
		&lt;communitie&gt;0&lt;/communitie&gt;
		&lt;distribution&gt;All communities&lt;/distribution&gt;
		&lt;Attribute&gt;
			&lt;id&gt;116&lt;/id&gt;
			&lt;event_id&gt;14&lt;/event_id&gt;
			&lt;category&gt;Network activity&lt;/category&gt;
			&lt;type&gt;ip-dst&lt;/type&gt;
			&lt;to_ids&gt;1&lt;/to_ids&gt;
			&lt;uuid&gt;4f8c2cc3-0410-4bf0-8559-5b9dff32448e&lt;/uuid&gt;
			&lt;revision&gt;1&lt;/revision&gt;
			&lt;private&gt;0&lt;/private&gt;
			&lt;cluster&gt;0&lt;/cluster&gt;
			&lt;communitie&gt;0&lt;/communitie&gt;
			&lt;value&gt;1.1.1.111&lt;/value&gt;
			&lt;distribution&gt;All communities&lt;/distribution&gt;
			&lt;category_order&gt;g&lt;/category_order&gt;
		&lt;/Attribute&gt;
		&lt;Attribute&gt;
			&lt;id&gt;117&lt;/id&gt;
			&lt;event_id&gt;14&lt;/event_id&gt;
			&lt;category&gt;Payload delivery&lt;/category&gt;
			&lt;type&gt;malware-sample&lt;/type&gt;
			&lt;to_ids&gt;0&lt;/to_ids&gt;
			&lt;uuid&gt;4f8c2d08-7e6c-4648-8730-50a7ff32448e&lt;/uuid&gt;
			&lt;revision&gt;1&lt;/revision&gt;
			&lt;private&gt;0&lt;/private&gt;
			&lt;cluster&gt;0&lt;/cluster&gt;
			&lt;communitie&gt;0&lt;/communitie
			&lt;value&gt;.doc|3f6f1aaab6171925c81de9b34a8fcf8e&lt;/value&gt;
			&lt;distribution&gt;All communities&lt;/distribution&gt;
			&lt;category_order&gt;c&lt;/category_order&gt;
		&lt;/Attribute&gt;
	&lt;/Event&gt;
&lt;/response&gt;
</pre>
<p>The respone from requesting an invalid page</p>
<pre>
&lt;?xml version = "1.0" encoding = "UTF-8"?&gt;
&lt;response&gt;
	&lt;name&gt;Not Found&lt;/name&gt;
	&lt;url&gt;/Waldo/&lt;/url&gt;
&lt;/response&gt;
</pre>
</div>