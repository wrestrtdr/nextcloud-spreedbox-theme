<?php /** @var $_ array */ ?>

<ul class="error-wide">
	<li class='error'>
		<?php p($l->t('You are accessing the server from the untrusted domain "%s".', $_['domain'])); ?><br>

		<p class='hint'>
			<?php p($l->t('Please contact your administrator. If you are an administrator of this instance, add the domain "%s" to "/etc/owncloud/additional_trusted_domains.conf" and run "spreedbox-update-trusted-domains" to activate the new settings. An example configuration is provided in "/etc/owncloud/additional_trusted_domains.conf.sample".', $_['domain'])); ?>
			<br>
		</p>
	</li>
</ul>
