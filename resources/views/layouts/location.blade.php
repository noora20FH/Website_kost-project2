@extends('layouts.fe')
@section('title')
    Login
@endsection
@section('content')
<style>
 .form-group{
        margin-bottom: 25px;
    }
    .card .card-header h4 {
        font-size: 16px;
        line-height: 28px;
        color:#000;
        padding-right: 10px;
        margin-bottom: 0;
    }

    .text-small{
        font-size: 12px;
        line-height: 20px;
    }
    a{
        color: red;
        font-weight: 500;
        -webkit-transition: all 0.5s
    }
    .btn:not(:disabled):not(.disabled){
        cursor: pointer;
    }
    .btn.btn-lg{
        padding: .75rem 1.5rem;
        font-size: 12px;
    }
    .btn-primary, .btn-primary.disabled {
    box-shadow: 0 2px 6px #acb5f6;
    background-color: #ebd5d5;
    border-color: #ebd5d5;
}
.btn {
    font-weight: 600;
    font-size: 12px;
    line-height: 24px;
    padding: 0.3rem 0.8rem;
    letter-spacing: 0.5px;
}
.btn-block{
        display: block;
        width: 100%;
    }
    .btn-group-lg>.btn, .btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
}
    .btn-primary {
    color: #fff;
    background-color: #000;
    border-color: #ebd5d5;
}

.required:after {
    content:" *";
    color: red;
}
</style>
<body>
    <center>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.518538060696!2d112.61403891498823!3d-7.945244181348205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882744f95407f%3A0xff53011fb22cf5da!2sJl.%20Semanggi%20Bar.%20No.7%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1669072524479!5m2!1sid!2sid" width="600" height="450" margin-style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
      </body>
@endsection
