<?php

require_once realpath(__DIR__ . '/../vendor/autoload.php');

use JDZ\Social\Button\Button;

function buttonToLink(Button $button, string $innerContent = '')
{
    $data = $button->getAttributes();

    $html = '<a';
    foreach ($button->getAttributes() as $key => $value) {
        $html .= ' ' . $key . '="' . $value . '"';
    }
    $html .= '>' . $innerContent . '</a>';

    echo $html . "\n";
}

try {

    $shareUrl = 'https://localhost/share-my-url/';
    $shareTitle = 'My shared page';
    $youtubeChannel = 'https://youtube.com';

    $facebook = new \JDZ\Social\Button\FacebookButton();
    $facebook->setDataAttribute('href', $shareUrl);
    $facebook->setDataAttribute('layout', 'button');
    $facebook->setDataAttribute('size', 'small');
    buttonToLink($facebook);

    $facebookLike = new \JDZ\Social\Button\FacebookLikeButton();
    $facebookLike->setDataAttribute('href', $shareUrl);
    $facebookLike->setDataAttribute('layout', 'button');
    $facebookLike->setDataAttribute('action', 'like');
    $facebookLike->setDataAttribute('size', 'small');
    // $facebookLike->setDataAttribute('share', false);
    // $facebookLike->setDataAttribute('show-faces', false);
    buttonToLink($facebookLike);

    $facebookPage = new \JDZ\Social\Button\FacebookPageButton();
    $facebookPage->setDataAttribute('href', $shareUrl);
    $facebookPage->setDataAttribute('tabs', 'timeline');
    // $facebookPage->setDataAttribute('show-facepile', false);
    // $facebookPage->setDataAttribute('small-header', false);
    // $facebookPage->setDataAttribute('hide-cover', false);
    // $facebookPage->setDataAttribute('width', null);
    // $facebookPage->setDataAttribute('height', null);
    // $facebookPage->setDataAttribute('adapt-container-width', false);
    buttonToLink($facebookPage);

    $linkedinFollowCompany = new \JDZ\Social\Button\LinkedinFollowCompanyButton();
    $linkedinFollowCompany->setDataAttribute('counter', 'top');
    // $linkedinFollowCompany->setDataAttribute('id', null);
    buttonToLink($linkedinFollowCompany);

    $linkedinMemberProfile = new \JDZ\Social\Button\LinkedinMemberProfileButton();
    $linkedinMemberProfile->setDataAttribute('format', 'inline');
    $linkedinMemberProfile->setDataAttribute('related', false);
    // $linkedinMemberProfile->setDataAttribute('id', null);
    // $linkedinMemberProfile->setDataAttribute('text', null);
    buttonToLink($linkedinMemberProfile);

    $linkedin = new \JDZ\Social\Button\LinkedinButton();
    $linkedin->setDataAttribute('url', $shareUrl);
    $linkedin->setDataAttribute('counter', 'top');
    buttonToLink($linkedin);

    $twitter = new \JDZ\Social\Button\TwitterButton();
    $twitter->setDataAttribute('href', $shareUrl);
    $twitter->setDataAttribute('text', $shareTitle);
    // $twitter->setDataAttribute('hashtags', '');
    // $twitter->setDataAttribute('size', null);
    buttonToLink($twitter);

    $youtubeSubscribe = new \JDZ\Social\Button\YoutubeSubscribeButton();
    // $youtubeSubscribe->setDataAttribute('count', 'default');
    // $youtubeSubscribe->setDataAttribute('layout', 'default');
    $youtubeSubscribe->setDataAttribute('channel', $youtubeChannel);
    buttonToLink($youtubeSubscribe);
} catch (\Throwable $e) {
    echo (string)$e;
    //echo $e->getMessage();
}
exit();
