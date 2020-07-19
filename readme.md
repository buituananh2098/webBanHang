<h1>Code chức năng nào tạo nhánh mới</h1>
<h2> - Checkout sang master, pull code về</h2>
<h2> - Từ master tạo 1 branch mới.</h2>

<h1>Push code</h1>
<h2> - push code lên</h2>
<h2> - checkout sang branch dev</h2>
<h2> - pull code từ branch dev về</h2>
<h2> - từ dev merger với branch đang code</h2>
<h2> - push</h2>


<h1>Cài xampp</h1>
<h1>Cài composer</h1>
<h1>Cài git base</h1>
<h1>Clone về htdocs (tên thư mục att)</h1>
<h1>thiết lập tên miền ảo:</h1>
  - vào file C:\Windows\System32\drivers\etc\hosts của window thêm dòng: 
    127.0.0.1 att.lc <br>
  - vào C:\xampp\apache\conf\extra\httpd-vhosts.conf <br>
  <  VirtualHost att.lc:80><br>
        DocumentRoot "C:\xampp\htdocs\att\public"<br>
        ServerName att.lc<br>
  <  /VirtualHost> <br>
    restart lại apache xampp
<h1>mở cmd vào C:\xampp\htdocs\att chạy lệnh: composer install.</h1>
