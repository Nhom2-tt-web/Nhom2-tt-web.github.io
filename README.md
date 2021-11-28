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


