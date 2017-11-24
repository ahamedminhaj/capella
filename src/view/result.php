<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Capella — file screen</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/public/build/bundle.css?v=<?= filemtime('public/build/bundle.css') ?>">
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />
        <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/apple-touch-icon-180x180.png" />
        <meta name="description" property="og:description" content="Cloud service for image storage and delivery. Upload files and accept image-filters on the fly with simple API">
        <meta name="keywords" content="cloud service,upload files,image storage">
        <meta name="image" property="og:image" content="<?= \Methods::getDomainAndProtocol(); ?>/meta_img.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    </head>
    <body>
        <div class="capella result">
            <div class="result__contents">
                <img class="result__img" src="<?= $imageURL ?>">
            </div>
            <div class="result__footer">
                <div class="result__footer-filters">
                    <div name="js-copyable-authorize" class="result__copy">
                        <? include(DOCROOT . "public/app/svg/icon-copy.svg") ?>
                        <span class="result__copy-text">Copy link</span>
                        <a name="js-copyable" class="result__copy-link" href="javascript:void(0)"><?= $imageURL ?></a>
                    </div>
                    <input type="text" value="+  /resize___x___" name="">
                    <input type="text" value="+  /crop___x___" name="">
                </div>
                <div class="result__footer-about">
                    <a class="result__footer-logo-link" href="/">
                        <img class="result__footer-logo" src="/public/app/svg/logo-horizontal.svg">
                    </a>
                    <a class="result__footer-link" href="https://github.com/codex-team/capella/blob/master/README.md">About</a>
                    <a class="result__footer-link" href="https://github.com/codex-team/capella/blob/master/README.md#upload-api">API</a>
                    <a class="codex-team" href="https://ifmo.su/">CodeX</a>
                </div>
            </div>
        </div>
        <script src="/public/build/bundle.js?v=<?= filemtime('public/build/bundle.js') ?>" onload="capella.init();"></script>
    </body>
</html>
