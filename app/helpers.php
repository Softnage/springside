<?php

if(!function_exists('content')) {
	function content(string $str) {
		$contents = [
			'app' => [
				'name' => 'Spring Side Academy',
				'host' => 'springsideacademy.com',
				'motto' => 'Like a spring of water whose waters do not fail',
				'accounts' => [
					[
						'type' => 'Bank Account',
						'name' => 'SPRING SIDE ACADEMY',
						'bank_network' => 'Cal Bank (Suame Magazine Branch)',
						'number' => '1400002159537',
						'paid_in_by' => "[Child's name]",
					],
					[
						'type' => 'Bank Account',
						'name' => 'SPRING SIDE ACADEMY',
						'bank_network' => 'Access Bank (Amakom Branch)',
						'number' => '0281673398401',
						'paid_in_by' => "[Child's name]",
					],
					[
						'type' => 'Bank Account',
						'name' => 'SPRING SIDE ACADEMY',
						'bank_network' => 'Sinapi Aba Savings and Loans Bank (Ellis Avenue Branch)',
						'number' => '341031243301',
						'paid_in_by' => "[Child's name]",
					],
					[
						'type' => 'MTN Mobile Money Account',
						'name' => 'SPRING SIDE ACADEMY',
						'bank_network' => 'MTN',
						'number' => '0241654253',
						'paid_in_by' => "[Child's name]",
					],
				],
				'web_contact_email' => 'ssa.amidarr@gmail.com',
				'location' => 'Paraku Estate, Atasemanso',
				'admissions_phone' => '0271017170',
				'primary_phone' => '0271017170',
				'secondary_phone' => ' 0204864000',
				'contact_email' => 'springsideacademygh@gmail.com',
				'map_web_address' => 'https://www.google.com/maps/place/Spring+Side+Academy/@6.645754,-1.6253297,17z/data=!3m1!4b1!4m5!3m4!1s0xfdb913bfadaeb6b:0xfa401b75304550f6!8m2!3d6.6457221!4d-1.6231645',
				'social' => [
					'facebook' => [
						'address' => 'https://web.facebook.com/Spring-Side-Academy-107674835061426/?ref=pages_you_manage',
					],
					'twitter' => [
						'address' => 'https://twitter.com/springside11',
					],
					'instagram' => [
						'address' => 'https://www.instagram.com/springside.academy/',
					],
					'linkedin' => [
						'address' => 'https://www.linkedin.com/company/spring-side-academy/',
					],
				]
			]
		];
		$ret;
		$strArr = explode('.', $str);
		foreach($strArr as $substr) {
			if(!isset($ret)) {
				$ret = $contents[$substr];
			} else {
				$ret = $ret[$substr];
			}
		}

		return $ret;
	}
}


if(!function_exists('seo')) {
	function seo($params = []) {
		$title = array_key_exists('title', $params) ? $params['title'] : content('app.name');
		$description = array_key_exists('description', $params) ? $params['description'] : content('app.motto');
		$picture = array_key_exists('picture', $params) ? $params['picture'] : asset('images/site-banner.jpg');
		$url = array_key_exists('url', $params) ? $params['url'] : Request::fullUrl();

		$seo = "";

		$seo .= "<meta property='og:title' content='$title' />";
		$seo .= "<meta name='description' content='$description' />";
		$seo .= "<meta property='og:description' content='$description' />";
		$seo .= "<meta property='og:url' content='$url' />";
		$seo .= "<meta property='og:image' content='$picture' />";
		$seo .= "<title>$title</title>";

		return $seo;
	}
}

?>
