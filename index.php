<style>
    body {
        margin: 0;
        padding: 0;
        border: 0;
        overflow: hidden;
        height: 100%;
        max-height: 100%;
    }

    #main_laft {
        position: fixed;
        left: 0;
        height: 100%;
        width: 150px;
        overflow: hidden;
        vertical-align: top;
        background-image: linear-gradient(to bottom, #ff6b78, #c45263, #8c3a4c, #572532, #271118);
    }

    #main_right {
        position: absolute;
        left: 150px;
        height: 100%;
        width: 100%;
        right: 0;
        bottom: 0;
        overflow: hidden;
    }
</style>
<div>
    <iframe name="main_laft" id="main_laft" src="main_laft.php"></iframe>
    <iframe name="main_right" id="main_right" src="main_right.php"></iframe>
</div>