<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();
        $products=[
            [1,1,"Samsung S1","KeGJRv9qN1tCPbdsT11LbQ9sHY4ilAj0KtPSvONd.jpeg","\u003cul\u003e\u003cli\u003eSản phẩm Ch\u0026iacute;nh h\u0026atilde;ng, Mới 100%, Nguy\u0026ecirc;n seal, Hộp tr\u0026ugrave;ng imei m\u0026aacute;y.\u003c/li\u003e\u003cli\u003eSản phẩm đ\u0026atilde; được k\u0026iacute;ch hoạt bảo h\u0026agrave;nh điện tử qua tổng đ\u0026agrave;i\u0026nbsp;6060\u0026nbsp;của Samsung Việt Nam\u003c/li\u003e\u003cli\u003eSản phẩm được bao test 30 ng\u0026agrave;y 1 đổi 1 nếu m\u0026aacute;y c\u0026oacute; lỗi do nh\u0026agrave; sản xuất v\u0026agrave; được bảo h\u0026agrave;nh 12 th\u0026aacute;ng ch\u0026iacute;nh h\u0026atilde;ng\u0026nbsp;(xem chi tiết)\u003c/li\u003e\u003cli\u003eBạch Long cam kết Bảo H\u0026agrave;nh đủ 12 th\u0026aacute;ng từ khi nhận h\u0026agrave;ng theo ti\u0026ecirc;u chuẩn\u003c/li\u003e\u003cli\u003ePhụ kiện k\u0026egrave;m theo m\u0026aacute;y được bao test 30 ng\u0026agrave;y 1 đổi 1 từ thời điểm mua sản phẩm\u003c/li\u003e\u003cli\u003eGi\u0026aacute; đ\u0026atilde; bao gồm 10% V.A.T\u003c/li\u003e\u003c/ul\u003e","\u003ch2\u003eĐược xem như l\u0026agrave; một qu\u0026acirc;n b\u0026agrave;i chiến lược mới của\u0026nbsp;Samsung\u0026nbsp;v\u0026agrave;o đầu năm 2020, chiếc điện thoại\u0026nbsp;Galaxy M10\u0026nbsp;vừa ra mắt hứa hẹn sẽ g\u0026acirc;y n\u0026ecirc;n một l\u0026agrave;n s\u0026oacute;ng ho\u0026agrave;n to\u0026agrave;n mới v\u0026agrave; đủ sức cạnh tranh với c\u0026aacute;c đối thủ kh\u0026aacute;c trong c\u0026ugrave;ng ph\u0026acirc;n kh\u0026uacute;c gi\u0026aacute; rẻ.\u003c/h2\u003e\u003ch3\u003eThiết kế m\u0026agrave;n h\u0026igrave;nh mới Infinity-V\u003c/h3\u003e\u003cp\u003eGalaxy M10 l\u0026agrave; chiếc\u0026nbsp;smartphone\u0026nbsp;đầu ti\u0026ecirc;n của Samsung sở hữu m\u0026agrave;n h\u0026igrave;nh tr\u0026agrave;n viền mới Infinity-V. C\u0026ugrave;ng với k\u0026iacute;ch thước lớn 6.2 inch v\u0026agrave; độ ph\u0026acirc;n giải\u0026nbsp;HD+, m\u0026aacute;y cho diện t\u0026iacute;ch trải nghiệm rộng r\u0026atilde;i, h\u0026igrave;nh ảnh được hiển thị đầy đủ v\u0026agrave; tối đa.\u003c/p\u003e\u003cp\u003e\u003cimg alt=Màn hình điện thoại Samsung Galaxy M10 chính hãng src=https://cdn.tgdd.vn/Products/Images/42/195716/dtdd-samsung-galaxy-m10-6.jpg style=width:100% title=Màn hình điện thoại Samsung Galaxy M10 chính hãng /\u003e\u003c/p\u003e\u003cp\u003eHơn nữa, thiết kế nguy\u0026ecirc;n khối của m\u0026aacute;y c\u0026ugrave;ng phần viền được bo cong nhẹ\u0026nbsp;cho người d\u0026ugrave;ng cảm gi\u0026aacute;c cầm nắm được thoải m\u0026aacute;i.\u003c/p\u003e\u003cp\u003e\u003cimg alt=Màn hình điện thoại Samsung Galaxy M10 chính hãng src=https://cdn.tgdd.vn/Products/Images/42/195716/dtdd-samsung-galaxy-m10-2.jpg style=width:100% title=Màn hình điện thoại Samsung Galaxy M10 chính hãng /\u003e\u003c/p\u003e\u003ch3\u003eHiệu năng ổn định trong ph\u0026acirc;n kh\u0026uacute;c\u003c/h3\u003e\u003cp\u003eChiếc điện thoại Samsung mới n\u0026agrave;y\u0026nbsp;được trang bị chip\u0026nbsp;Exynos 7870\u0026nbsp;\u0026quot;c\u0026acirc;y nh\u0026agrave; l\u0026aacute; vườn\u0026quot; do ch\u0026iacute;nh h\u0026atilde;ng sản xuất c\u0026ugrave;ng với RAM 2 GB.\u003c/p\u003e\u003cp\u003e\u003cimg alt=Giao diện Android điện thoại Samsung Galaxy M10 chính hãng src=https://cdn.tgdd.vn/Products/Images/42/195716/dtdd-samsung-galaxy-m10-5.jpg style=width:100% title=Giao diện Android điện thoại Samsung Galaxy M10 chính hãng /\u003e\u003c/p\u003e\u003cp\u003eGalaxy M10 chạy tr\u0026ecirc;n hệ điều h\u0026agrave;nh\u0026nbsp;Android 8.1 Oreo\u0026nbsp;với giao diện Samsung Experience 9.5 gi\u0026uacute;p hiệu năng của m\u0026aacute;y được tối ưu tốt hơn, giao diện trực quan dễ sử dụng.\u003c/p\u003e\u003cp\u003e\u003cimg alt=Menu ứng dụng điện thoại Samsung Galaxy M10 chính hãng src=https://cdn.tgdd.vn/Products/Images/42/195716/dtdd-samsung-galaxy-m10-1.jpg style=width:100% title=Menu ứng dụng điện thoại Samsung Galaxy M10 chính hãng /\u003e\u003c/p\u003e\u003cp\u003eVới cấu h\u0026igrave;nh tr\u0026ecirc;n, Samsung M10\u0026nbsp;đ\u0026aacute;p ứng nhu cầu giải tr\u0026iacute; lướt web b\u0026igrave;nh thường hay chơi c\u0026aacute;c game nhẹ nh\u0026agrave;ng: N\u0026ocirc;ng trại, kim cương,...\u003c/p\u003e\u003cp\u003e\u003cimg alt=Hiệu năng điện thoại Samsung Galaxy M10 chính hãng src=https://cdn.tgdd.vn/Products/Images/42/195716/dtdd-samsung-galaxy-m10.jpg style=width:100% title=Hiệu năng điện thoại Samsung Galaxy M10 chính hãng /\u003e\u003c/p\u003e\u003ch3\u003eCamera k\u0026eacute;p c\u0026oacute; độ ph\u0026acirc;n giải cao\u003c/h3\u003e\u003cp\u003eCụm camera k\u0026eacute;p của Galaxy M10 c\u0026oacute; camera ch\u0026iacute;nh 13 MP v\u0026agrave; ống k\u0026iacute;nh thứ hai 5 MP cho ph\u0026eacute;p bạn c\u0026oacute; thể chụp ảnh xo\u0026aacute; ph\u0026ocirc;ng tốt, nổi bật ch\u0026acirc;n dung v\u0026agrave; chủ thể.\u003c/p\u003e\u003cp\u003e\u003cimg alt=Camera kép điện thoại Samsung Galaxy M10 chính hãng src=https://cdn.tgdd.vn/Products/Images/42/195716/dtdd-samsung-galaxy-m10-3.jpg style=height:50px; width:100% title=Camera kép điện thoại Samsung Galaxy M10 chính hãng /\u003e\u003c/p\u003e\u003cp\u003eỞ điều kiện \u0026aacute;nh s\u0026aacute;ng đầy đủ, cụm camera n\u0026agrave;y c\u0026ograve;n c\u0026oacute; thể cho bạn những tấm h\u0026igrave;nh ưng \u0026yacute; cũng như chụp h\u0026igrave;nh g\u0026oacute;c rộng tốt hơn.\u003c/p\u003e\u003cp\u003e\u003cimg alt=Ảnh chụp từ điện thoại Samsung Galaxy M10 chính hãng src=https://cdn.tgdd.vn/Products/Images/42/195716/dtdd-samsung-galaxy-m10-8.jpg style=width:100% title=Ảnh chụp từ điện thoại Samsung Galaxy M10 chính hãng /\u003e\u003c/p\u003e\u003cp\u003eCamera sefie c\u0026oacute; độ ph\u0026acirc;n giải 5 MP hỗ trợ\u0026nbsp;t\u0026iacute;nh năng l\u0026agrave;m đẹp\u0026nbsp;v\u0026agrave;\u0026nbsp;sefie ngược s\u0026aacute;ng HDR,\u0026nbsp;gi\u0026uacute;p bạn c\u0026oacute; được những tấm ảnh tự sướng đẹp mắt.\u003c/p\u003e\u003ch3\u003eDung lượng pin lớn 3400 mAh\u003c/h3\u003e\u003cp\u003eSamsung đ\u0026atilde; trang bị cho M10 vi\u0026ecirc;n pin c\u0026oacute; dung lượng ở mức kh\u0026aacute; cao 3400 mAh, gi\u0026uacute;p thiết bị c\u0026oacute; thể duy tr\u0026igrave; thời gian sử dụng trong khoảng 1 ng\u0026agrave;y với thao t\u0026aacute;c lướt web, đọc b\u0026aacute;o cơ bản.\u003c/p\u003e",1,24,1,"2020-05-19 09:43:21","2020-05-19 10:10:31"],
            [2,1,"SamSung S2","KiSKrO3PRnGVlbLF79vYMOxFkzGI73KBWoB4hEjZ.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:20","2020-05-19 09:43:20"],
            [3,1,"Samsung S3","bSln7PkR8J01B5eFAuStqJvjq1QduF8VSywLKexP.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:21","2020-05-19 09:43:21"],
            [4,1,"Samsung S4","AzNi1fL1ISFpGmqHmv3dtPGgnkIlBpUhexAq4HYJ.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:22","2020-05-19 09:43:22"],
            [5,1,"Samsung S5","e0ovHraogdY8z4RnFOhM8zkYmgkkcWZ7LWbtOINl.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:23","2020-05-19 09:43:23"],
            [6,3,"Samsung S6","QvwxVMFyUuiSbAQgxlm5C7ZTO0HCUs9e4Nbun0Ah.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:24","2020-05-19 09:43:24"],
            [7,3,"Samsung S7","xOe46M7YScwE5ZMdNdEsQkk6eO7k4LJxP3D7LTDy.jpeg","u003cpu003enull1u003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:25","2020-05-19 09:43:25"],
            [8,3,"Samsung S8","aEFWzp2LcME8QVFBveJAmVEXEpRzZuXp88kRtqMk.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:26","2020-05-19 09:43:26"],
            [9,3,"Samsung S9","C2D1mDTrW7Ly7dXVVTpmn4eb1Mc09nZTqW5sgWeX.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",1,24,"2020-05-19 09:43:27","2020-05-19 09:43:27"],
            [10,1,"Sony 1","uv7PFwcbKAVUBAJ5xDf3MeLTDcHvPtkbY732GPM8.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",2,43,"2020-05-19 09:43:37","2020-05-19 09:43:37"],
            [11,1,"Sony 2","epK77FSq0Uu0At4ZtzTsAVF6rrBaw3DJaNTEzCwI.jpeg","u003cpu003eqqu0026lt;/pu0026gt;u003c/pu003e","u003cpu003e1u003c/pu003e",2,43,"2020-05-19 09:43:28","2020-05-19 09:43:28"],
            [12,1,"Sony 3","8B24GjXCYt5IHbEekqlVaRHeI5YxS6UnsZpG29vr.jpeg","u003cpu003eqqu0026lt;/pu0026gt;u003c/pu003e","u003cpu003e1u003c/pu003e",2,43,"2020-05-19 09:43:29","2020-05-19 09:43:29"],
            [13,1,"quat media 1","3C0QlvpUzv67mpPjk8hm85nivnwWysbya6v7GsvF.png","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",5,44,"2020-05-19 09:43:38","2020-05-19 09:43:38"],
            [14,1,"quat panasonic 1","LUHIYYAYY4mAWkuKQS0kQtE2XyMX8iJCENHJFKwT.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",6,45,"2020-05-19 09:43:29","2020-05-19 09:43:29"],
            [15,1,"quat mitsubishi 1","kZKUIY7doWk436CQtyKktLcmqbc65NCeJBDJ0Z6C.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e15u003c/pu003e",7,46,"2020-05-19 09:43:30","2020-05-19 09:43:30"],
            [16,1,"quat asia 1","GBxDaP7vTmQfSmiF6yBa64cRMwOuKRWEAuTdvAMJ.png","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",8,47,"2020-05-19 09:43:39","2020-05-19 09:43:39"],
            [17,1,"quat komasu 1","PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",9,48,"2020-05-19 09:43:31","2020-05-19 09:43:31"],
            [18,1,"quat sunhouse 1","LUvlCe5WB7kjGvwaa3cMq6eugf7Fh2ItAflIBq2b.jpeg","u003cpu003enullu003c/pu003e","u003cpu003e1u003c/pu003e",10,49,"2020-05-19 09:43:32","2020-05-19 09:43:32"],
            [19,1,"Tủ lạnh Hatachi cao cấp","3ykD4kv7BBNQCN0RsZGoFOjU6OAxPwn5IKpSMqJe.png","u003cpu003emtu003c/pu003e","u003cpu003e1u003c/pu003e",11,57,"2020-05-19 09:43:33","2020-05-19 09:43:33"],
            [20,1,"Tivi Samsung 32IN Led thường","yNSLZCTYD9ttoUw7DRP6j2xxObQYN6wQMYgnqfsU.jpeg","u003cpu003eLoại tivi:Tivi LED thườngu003cbr /u003eSố inch: 32 inchu003cbr /u003eĐộ phu0026acirc;n giải:HDu003cbr /u003eCổng HDMI:2 cổngu003cbr /u003eCổng USB:1 cổngu003c/pu003e","u003cpu003e1u003c/pu003e",1,61,"2020-05-19 09:43:40","2020-05-19 09:43:40"],
        ];


        foreach ($products as $product) {
            App\Product::create([
                'name' => $product[2],
                'photo' => $product[3],
                'producer_id' => $product[6],
                'category_id' => $product[7],
                'description' => $product[4],
                'information' => $product[5],
                'status_id' => $product[1]

            ]);
        }

        Schema::enableForeignKeyConstraints();


    }
}
