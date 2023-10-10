<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="st_bcc_main_main_wrapper float_left">
        <div class="st_bcc_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Dear {{$user->Name}}, <br>
<br>
                        We hope this message finds you well. We are thrilled to inform you about an exciting promotion that you have been granted as a valued member of our community. <br>
                        <br>
                        Promotion Details:
                        <br>
                        Promotion Category: {{$promotionCategory->Name}} <br>
                        Promotion Discount: ${{$promotionCategory->Coefficient}} <br>
                        Promotion Start Date: {{$promotion->Start}} <br>
                        Promotion End Date: {{$promotion->End==null?"No expired": $promotion->end}} <br>
                        You are eligible to enjoy this promotion starting from {{$promotion->Start}} until {{$promotion->End==null?"No expired": $promotion->end}}. Don't miss out on this fantastic opportunity to save on your favorite products/services. <br>
                        <br>
                        Thank you for being a loyal member of our platform. We appreciate your continued support, and we look forward to serving you. If you have any questions or need further assistance, please do not hesitate to contact us. <br>
                        <br>
                        Best regards, <br>
                         Rainbow Entertaiment <br>
                        
  <br>
                         <a style="background: #7008e0;color:white;border-radius: 5px; padding:5px;text-decoration: none " href="/rainbow">RAINBOW</a>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>