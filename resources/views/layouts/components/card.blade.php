<style>

    .cardComp a{
        display: inline-block;
        color: #FFF !important;
        background-color: #43CF92 !important;
        padding: 15px 50px;
        width: 280px !important;
        font-size: 16px !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        border-radius: 5px;
    }

    /* Meduim Screen*/
    @media screen and (min-width: 600px) and (max-width:768px) {
        .cardComp a{
            font-size: 18px !important;
            width: 300px !important;
            margin-right: 100px;
        }
    }

    /* LARGE SCREEN */
    @media (min-width: 769px) {
        .cardComp a{
            font-size: 18px!important;
            width: 340px !important;
            margin-right: 100px;
        }
        .cardComp img{
            margin-left: 25px;
        }
    }
</style>



<div class="cardComp">
    <div>
        <img src="{{url($imgSrc)}}" style=" margin-bottom: 10px">
    </div>
        <p><span class="text-danger">*</span> {!! isset($text) ? $text : '' !!} </p>


        <a href="#" class="btnDiv" >
            {!! isset($btnText) ? $btnText : '' !!}

        </a>

</div>
