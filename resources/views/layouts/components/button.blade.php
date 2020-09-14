
<style>

    #btnDiv a{
        display: inline-block;
        background-color: #43CF92;
        padding: 15px 50px 15px 50px;
        width: 280px !important;
        font-size: 16px !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        border-radius: 5px;
    }

    /* Meduim Screen*/
    @media screen and (min-width: 600px) and (max-width:768px) {
        #btnDiv a{
            display: inline-block;
            /*padding: 15px 90px 15px 90px;*/
            font-size: 18px !important;
            width: 300px !important;
            margin-right: 100px;
        }
    }

    /* LARGE SCREEN */
    @media (min-width: 769px) {
        #btnDiv a{
            display: inline-block;
            padding: 15px 90px 15px 90px;
            font-size: 18px!important;
            width: 340px !important;
            margin-right: 100px;
        }

    }
</style>

<div id="btnDiv">
    <a class=" text-white" href="#"  >
        {!! isset($text) ? $text : '' !!}

    </a>
</div>
