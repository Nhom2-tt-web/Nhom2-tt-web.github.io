
    Hiện nay với việc phát triển mạnh của công nghệ thông tin và truyền thông các tin tức mới luôn được cập nhật nhanh chóng qua mạng  
Để các thông tin đến với người dân tại nhà bằng cách truy cập qua internet của  một cách nhanh chóng, dễ dàng và thuận lợi. Từ nhu cầu thực tế này cùng với kiểu thức em đã tiếp thu ở trường chúng em đã chọn đề tài : Đề tài “ Website covid-19  ” bằng ngôn ngữ lập trình PHP, cơ sở dữ liệu Mysql, mô hình MVC được xây dựng trên ý tưởng áp dụng công nghệ thông tin nhằm phục vụ nhu cầu của người dân trên toàn thế giới.
Dưới sự hướng dẫn tận tình của thầy Trần Hồng Việt – Giảng viên bộ môn thục tập Web chúng em đã tìm hiểu và hoàn thành được bài giao. Tuy nhiên với lượng kiến thức có hạn bài làm của chúng em còn nhiều thiếu sót. Mong các thầy (cô) góp ý để bài làm của chúng em được hoàn thiện hơn.
Em xin chân thành cảm ơn!

MVC là gì?
MVC là một mô hình thiết kế, giúp bạn tổ chức code theo từng phần độc lập với nhau, và các phần tương tác với nhau theo một cách nhất định.

Mô hình MVC gồm 3 lớp: Model, View, Controller. Cụ thể như sau:

Model: Lớp này chịu trách nhiệm quản lí dữ liệu: giao tiếp với cơ sở dữ liệu, chịu trách nhiệm lưu trữ hoặc truy vấn dữ liệu.
View: Lớp này chính là giao diện của ứng dụng, chịu trách nhiệm biểu diễn dữ liệu của ứng dụng thành các dạng nhìn thấy được.
Controller: Lớp này đóng vai trò quản lí và điều phối luồng hoạt động của ứng dụng. Tầng này sẽ nhận request từ client, điều phối các Model và View để có thể cho ra output thích hợp và trả kết quả về cho người dung.
Mô hình hoạt động
Trình duyệt gửi một request lên server, server nhận được request sẽ phân tích và gửi dữ liệu vào controller dựa vào router điều hướng. Trong vài trường hợp thì controller sẽ render luôn ra view (một template được chuyển thành HTML) và gửi trả về cho trình duyệt. Nhưng thông thường, cho các trang web động, controller sẽ tương tác với một model (đại diện cho một phần tử ví dụ như Post, chịu trách nhiệm giao tiếp với cơ sở dữ liệu). Sau khi gọi vào model, controller sẽ render view với dữ liệu lấy được và trả kết quả về cho trình duyệt để hiển thị.
+ Thiết kế Database
+ Xây dựng bố cục thư mục
+ Tao thiết kế cho giao diện admin
+ Làm chức năng đăng kí, đăng nhập 
+ Làm chức năng thêm bài viết 
Trên nền tảng Internet hiện nay có rất nhiều loại website khác nhau, và một trong những website quan trọng và phải kể đến đó chính là website tin tức. Trong những năm gần đây website tin tức ngày càng khẳng định vai trò của mình trên trong xã hội, đáp ứng đa dạng mục tiêu quan tâm của đông đảo người dùng. Với tốc độ phát triển của website tin càng cao, thì các hình thức báo, tạp chí bằng giấy đang ngày càng bị đe doạ.
Website tin tức về COVID19 là  trang web trang báo điện tử, được thiết kế chuyên biệt dùng để truyền tải những thông tin mới nhất, nóng hổi nhất về dịch bệnh. Các độc giả sẽ dễ dàng tiếp cận được những tin tức mới nhất trên website tin tức về covid 19 thông qua chiếc điện thoại thông minh hoặc là laptop, máy tính,…khi có kết nối Internet. Nhờ có website tin tức mà tốc độ lĩnh hội được đa dạng kiến thức cũng như các tin tức về đời sống, xã hội của con người ngày càng nhanh và hiệu quả. Vì vậy có thể thấy website tin tức là một trong những lĩnh vực website không thể thiếu trong nền tảng Internet hiện nay. 
I, Giới thiệu tổng quan
1, Trang chính
Trang chính là giao diện chính và quan trọng nhất của website tin tức. Trên trang chủ phần lớn thể hiện các tin tức nổi bật, những chuyên mục gồm có, hoặc các thông tin cơ bản liên quan đến trang báo
(Cap màn hình trang chủ covid19)
2, Tin tức nổi bật
Ở đây sẽ hiển thị những tin tức nổi bật của từng cổng thông tin covid19  lượng quan tâm của độc giả, hoặc dựa trên mức độ quan trọng của nó trong tình hình hiện tại. 
( cap màn hình tin nổi bật)
3, Thanh tìm kiếm 
Người xem sẽ dễ dàng tìm thấy mục tin tức mình quan tâm nhờ thanh tìm kiếm. Để cải thiện hiệu quả tìm kiếm của người dùng, các thanh tìm kiếm cần có thêm tính năng tìm kiếm nâng cao, giúp rút ngắn thời gian lọc tìm kết quả của người dùng, dễ dàng tìm thấy tin tức cần tìm. 
4, Liên hệ
Liên hệ bao gồm thông tin cơ bản của trang báo như tên trang báo đầy đủ/ tên công ty/ tên tòa soạn, mã số thuế, số giấy phép đăng ký kinh doanh, số điện thoại, địa chỉ văn phòng, địa chỉ chi nhánh,…hoặc kèm một bản đồ thực tế minh hoạ vị trí  trên bản đồ. 
II, Giớithiệu chi tiết
1, Trang chủ
Trang chủ cũng chính là giao diện của website, giao diện của website được xây dựng theo dạng cổng thông tin điện tử vì vậy cung cấp đầy đủ các mục như tin tức - sự kiện, tư liệu lịch sử, hướng dẫn nghiệp vụ, lễ hội văn hóa.


Ngoài ra trang chủ của website còn cung cấp các công văn, văn bản, quy định, thông tư để người xem dễ dàng theo dõi, cập nhật và thực hiện. 

Giao diện website được thiết kế rõ ràng, đơn giản với hình ảnh đã qua chọn lọc thể hiện tính nghiêm túc, mô phạm. 
2, Bản tin covid19
(cap man hình bản tin)
3, Chỉ đạo chống dịch
4, Dự phòng- điều trị
5, Vacxin-tiêm chủng
6, Hoạt động địa phương
7, Hướng dẫn
8, Tin tức
9, Tình hình thế giới
10, Đăng bài
III, Giớithiệu tính năng
1, Quản lý admin
Cho phép khách đăng ký, đăng nhập hệ thống để sử dụng với tư cách thành
viên.
- Người quản trị quản lý danh sách tài khoản (thêm, sửa, xóa) tài khoản.
- Người quản trị có thể thêm, sửa, xóa các tài khoản quản trị cấp thấp hơn.
- Phân quyền tài khoản theo nhóm
a, Đăng kí
b, Đăng nhập
2, Tin tức
 Module tin tức cho phép quản trị nội dung tin tức theo chủ đề.
- Nhóm tin cho phép thể hiện danh sách bản tin theo nhóm lên trang chủ.
- Module cho phép phân quyền chi tiết đến từng người quản trị. Có thể chỉ
định người quản trị quản lý module, hay chỉ quản lý các chủ đề của module.
- Thêm tag (từ khóa) cho bài viết
- Tích hợp công cụ mạng xã hội cho bài viết (like, share, comment,....)
- Được thiết kế chuẩn 
 3, Liên hệ
- Tạo biểu mẫu đề người dùng có thể chủ động gửi liên hệ đến người quản
trị.
- Thư liên hệ sẽ được thông báo qua email người quản trị, và hiển thị thông
báo tại khu vực quản trị hệ thống.
- Người quản trị có thể phản hồi thư liên hệ ngay tại website mà không cần mở hộp thư cá nhân
- Tạo và quản lý các bộ phận hỗ trợ
 4, Các tiện ích khác
 IV, Code










