<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }



            #proul li{display:block;overflow:hidden;clear:both;margin:20px ;border-top:1px solid #ccc;padding-top:10px;
                list-style: none;}
            .li_img{float:left;width:200px;height:200px;}
            .li_div{float:left;display: inline-block;width:60%;padding-left:10px;}
            .li_div p{display: inline-block;}
            /*分页*/
            .page-bar{
                margin:40px auto;
            }
            .page-bar ul{display:block;overflow:hidden;width:1000px;text-align: center;margin:0 auto;}
            ul,li{
                margin: 0px;
                padding: 0px;
            }
            li{
                list-style: none
            }
            .page-bar li{
                display: inline-block;}
            .page-bar li:first-child>a {
                margin-left: 0px
            }
            .page-bar a{
                border: 1px solid #ddd;
                text-decoration: none;
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: #5D6062;
                cursor: pointer;
                margin-right: 20px;
            }
            .page-bar a:hover{
                background-color: #eee;
            }
            .page-bar a.banclick{
                cursor:not-allowed;
            }
            .page-bar .active a{
                color: #fff;
                cursor: default;
                background-color: #E96463;
                border-color: #E96463;
            }
            .page-bar i{
                font-style:normal;
                color: #d44950;
                margin: 0px 4px;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links" id="list">
                    {{--<ul id="proul">--}}
                        {{--<li v-for="item in arrs">--}}
                            {{--<img :src="item['Main Media']" class="li_img">--}}
                            {{--<div class="li_div">--}}
                                {{--<h3>@{{item.Name}}</h3>--}}
                                {{--<b>$ @{{item.Price}}</b>--}}
                                {{--<p>@{{item.Description}}</p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    <div class="container">
                        @foreach ($data as $order)
                            {{ $data->Price }}
                        @endforeach
                    </div>

                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </body>
<script src="../js/vue.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/axios/0.19.0-beta.1/axios.js"></script>
<script>


</script>
</html>
