-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 04:28 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php05_eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parentid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parentid`) VALUES
(1, 'Thời trang nam', NULL),
(2, 'Thời trang nữ', NULL),
(3, 'Thời trang thể thao', NULL),
(4, 'Phụ kiện thời trang ', NULL),
(5, 'Thời trang trẻ em', NULL),
(6, 'Túi xách', NULL),
(7, 'Giày dép', NULL),
(8, 'Nón mũ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `profile`) VALUES
(1, 'Adidas', 'Đây là trang giới thiệu về thương hiệu Adidas'),
(2, 'Nike', 'Đây là trang giới thiệu về thương hiệu Nike'),
(3, 'Chanel', 'Đây là trang giới thiệu của thương hiệu Chanel'),
(4, 'Dior', 'Đây là trang giới thiệu profile của thương hiệu Dior'),
(5, 'TKPro', 'Đây là trang profile của TKPro'),
(6, 'Fendi', 'Đây là trang profile của thương hiệu Fendi');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturercategory`
--

CREATE TABLE `manufacturercategory` (
  `id` int(10) UNSIGNED NOT NULL,
  `manufacturerid` int(10) UNSIGNED NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturercategory`
--

INSERT INTO `manufacturercategory` (`id`, `manufacturerid`, `categoryid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 6),
(5, 1, 7),
(6, 2, 1),
(7, 2, 7),
(8, 3, 2),
(9, 3, 4),
(10, 3, 6),
(11, 3, 8),
(12, 4, 4),
(13, 4, 5),
(14, 5, 7),
(15, 5, 8),
(16, 6, 5),
(17, 6, 6),
(18, 6, 7),
(19, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderid` int(10) UNSIGNED NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `price` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderdate` datetime NOT NULL,
  `customername` varchar(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL,
  `customerphone` varchar(255) NOT NULL,
  `customeraddress` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0: mới đặt; 1: đã xử lý; -1: hủy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `saleprice` float UNSIGNED DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `createdate` date NOT NULL,
  `detail` text NOT NULL,
  `makerid` int(10) UNSIGNED DEFAULT NULL,
  `feature` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `price`, `saleprice`, `status`, `createdate`, `detail`, `makerid`, `feature`) VALUES
(1, 'Áo thun trơn nam Everest E2 (nhiều màu)', 'product1.jpg', 21000, 10500, b'1', '2019-02-23', 'Áo thun trơn nam form rộng phong cách hàn quốc vải dày mịn Everest E2 (nhiều màu): Chất liệu thun mềm mại, thoáng mát, thấm hút tốt, không lo hầm bí khi mặc. Thiết kế cổ tròn, tay ngắn mang lại cho phái mạnh phong cách nam tính và lịch lãm khi mặc hàng ngày .\r\n\r\nÁo thun nam là một loại trang phục có mặt trong tủ đồ của tất cả các chàng trai. Nếu chiếcáo sơ mimang lại cho các quý ông vẻ thanh lịch, đứng đắn thì áo thun nam lại tạo cho họ phong cách trẻ trung, cá tính đầy cuốn hút. Gần đây, những chiếcáo thun nam trơnluôn là một mẫu trang phục được cánh mày râu lựa chọn bởi lẽ nó dễ dàng khoe được body khỏe khoắn, săn chắc và tiện dụng trong việc tạo cho phái mạnh vẻ ngoài trẻ trung năng động đầy cá tính khi xuống phố hay tham gia các hoạt động thật thoải mái nhưng vẫn hợp xu hướng thời trang. Điều chắc chắn là bạn sẽ gây ấn tượng mạnh đấy nếu là lần đầu tiên diện trang phục này đến công sở. Đừng quên kết hợp thêm với vest hoặc áo khoác bên ngoài sẽ tôn lên nét khỏe khoắn, nam tính của bạn hơn đấy nhé.\r\n\r\nÁo thun nam sành điệucó thiết kế cổ tròn, tay ngắn mang lại cho phái mạnh phong cách nam tính và lịch lãm khi mặc hàng ngày\r\nForm áo ôm vừa vặn thoải mái khi mặc hằng ngàyhay các hoạt động mang lại sự tự tin và năng động cho phái mạnh\r\nÁo trơn màu đơn giản tạo nên nét nam tính mạnh mẽ cho nam giới khi mặc, giúp phái mạnhluôn cá tính,thời thượng\r\nĐường chỉ may đẹp, tinh tế mang đến sự an tâm tuyệt đối cho nam giới khi sử dụng sản phẩm\r\nMàu sắc đa dạng, cá tính,nổi bật,dễ phối đồ, rất cuốn hút khi mặc vận động thể thao hay đi chơi\r\nChất liệu thun mềm mại, thoáng mát, thấm hút tốt, không lo hầm bí khi mặc\r\nKết hợp hài hòa được với các trang phục từ bụi bặm cá tính như quần short, quần jean đến những phong cách đơn giản cổ điển như quần tây quần kaki,..\r\nKích thước: Size XS, S, M , L , XL , XXL\r\n\r\n\r\náo trơn.jpg\r\n\r\n\r\n\r\nThiết kế đơn giản, nam tính\r\n\r\nThiết kế cổ tròn, tay ngắn mang lại cho phái mạnh phong cách nam tính và lịch lãm khi mặc hàng ngày.Form áo ôm vừa vặn thoải mái khi mặc chơi thể thao hay các hoạt động mang lại sự tự tin và năng động cho phái mạnh.Áo thun là loại trang phục tiện dụng nhất dành cho nam giới.Áo thun namđược xem là một món đồ thời trang đặc biệt – đặc biệt do bên trong tủ đồ của bất cứ anh chàng nào cũng có món đồ này.\r\n\r\n\r\n\r\nChất liệu thun mềm mại\r\n\r\nChất liệu thun mềm mại, thoáng mát, thấm hút tốt, không lo hầm bí khi mặc.Theo xu hướng thời trang hiện nayáo với chất liệu thuntheo phong cách thể thao tôn vinh nét đẹp menly, kiểu áo đơn giản dễ phối đồ khi mặc luôn luôn là lựa chọn hàng đầu của cánh mày râu sành điệu, cá tính và yêu thích thời trang. Những chàng trai sẽ lấy đi bao ánh mắt của các nàng khi mặc chiếc áo tinh tế này.\r\n\r\n\r\n\r\nVới thiết kế áo thun,bạn thoả sức trưng diện và phối đồ theo phong cách riêng mà không cần một quy chuẩn nhất định nào. Có thể kết hợp hài hòa được với các trang phục từ bụi bặm cá tính như quần short, quần jean đến những phong cách đơn giản cổ điển như quần tây quần kaki,..Thử style đa phong cách của chiếc áo thun này cùng chúng tôi nào!\r\n\r\nĐÔI NÉT VỀ SẢN PHẨM ÁO THUN NAM\r\nÁo thun namlà trang phục cơ bản và tiện dụng nhất đối với phái mạnh. Hầu như người đàn ông nào cũng đều phải có vài chiếc áo pull nam trong tủ áo của mình. Việc muaáo thun namcũng được bàn tán sôi nổi trên khắp các diễn đàn hay blog cá nhân. Với những ưu điểm tuyệt vời như phong cách đa dạng, kiểu dáng đơn giản và chất liệu thoáng mát,áo thun nam Hàn Quốcđược phái mạnh yêu thích và lựa chọn khi đến công sở hay dạo phố. Bên cạnh đó, áo thun nam cổ trụ cũng được các chàng trai văn phòng yêu thích vì nét lịch sự và trẻ trung. Chỉ cần kết hợpáo thun nambody với quần jeans nam hay quần kaki nam và những phụ kiệnđi kèm như ví nam, túi du lịch nam hay đơn giản hơn là chiếc balo laptop namnăng động, bạn đã có ngay bộ cánh đơn giản mà hiện đại.\r\n\r\n\r\n\r\nCÁC KIỂU ÁO THUN NAM ĐẸP\r\n\r\nBạn sẽ rất ngạc nhiên bởi tính thẩm mỹ mà các kiểuáo thun namcó thể đem lại. Một chiếcáo phôngnam hàng hiệu trong tích tắc có thể biến bạn từ một anh chàng năng động thể thao sang một anh chàng lịch lãm và cá tính. Kết hợpáo thun nam đẹpvới áo khoác có mũ màu sắc trẻ trung cho những ngày cuối tuần vui vẻ, thêm chiếcáo vestcho các cuộc họp quan trọng, bạn sẽ tràn đầy năng lượng và tươi trẻ. Chúng tôi luôn có nhiều sự lựa chọn dành cho bạn, với những sản phẩm mới trong bộ sưu tậpáo thun namcao cấp', 1, b'1'),
(2, 'Áo Thun Phông Nam Aothun102', 'product2.jpg', 20000, 10000, b'1', '2019-02-22', 'Chất liệu thun mềm mại co giãn tốt , thoáng mát\r\nThiết kế thời trang phù hợp xu hướng hiện nay\r\nKiểu dáng đa phong cách\r\nĐường may tinh tế sắc sảo\r\nÁo thun được thiết kế vẻ đẹp trẻ trung năng động\r\nÁo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải cotton dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc!\r\nDễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố\r\nThích hợp cho sự kết hợp vứi quần jean, sọt,thể thao!\r\nCó đủ các size XS, S, M, L, XL, 2XL,3XL đáp ứng cho mọi khách hàng\r\nMàu sắc: Có đủ các màu Trắng, Xanh Ngọc, Xanh Chuối, Hồng, Cam, Vàng...\r\nKhách được kiểm tra hàng, mặc thử,ưng ý thanh toán tiền ko ưng ý trả lại cho shiper và hoàn toàn miễn phí\r\nCảm ơn quí khách đã ghé thăm và ủng hộ shop rất mong nhận được sự góp ý của khách hàng để shop ngày càng hoàn thiện hơn nữa', 2, b'0'),
(3, 'Áo Sơ Mi Nữ Cổ Trụ Tay Bồng Zavans', 'product3.jpg', 300000, 169000, b'1', '2019-02-20', 'Thiết kế cổ trụ, tay phồng xinh xắn\r\nChất liệu cao cấp, bền đẹp\r\nForm suông thoải mái\r\nMang lại vẻ thanh lịch, trẻ trung\r\nCó thể mặc đi làm, đi chơi, dạo phố,…', 3, b'0'),
(4, 'Vali Du Lịch American Explorer Crockett...', 'product4.jpg', 1500000, NULL, b'1', '2019-02-23', 'Chất liệu nhựa ABS cao cấp, bền chắc\r\n\r\nTrang bị cần kéo và hệ thống 4 bánh xoay 360 độ linh hoạt\r\n\r\nBên trong ngăn chứa đồ rộng rãi cho bạn thỏa sức mang theo các vật dụng cần thiết', 5, b'0'),
(5, 'Áo thun trơn nam SP5', 'product5.jpg', 21000, 10500, b'1', '2019-01-01', 'Đây là SP cũ', 1, b'1'),
(6, 'Áo Thun Phông Nam SP6', 'product6.jpg', 20000, 10000, b'1', '2018-12-19', 'SP quá cũ', 4, b'0'),
(7, 'Áo Sơ Mi Nữ Cổ SP 7', 'product7.jpg', 300000, NULL, b'1', '2019-02-20', 'Thiết kế cổ trụ, tay phồng xinh xắn\r\nChất liệu cao cấp, bền đẹp\r\nForm suông thoải mái\r\nMang lại vẻ thanh lịch, trẻ trung\r\nCó thể mặc đi làm, đi chơi, dạo phố,…', 6, b'1'),
(8, 'Vali Du Lịch American SP8 Cộng hòa xã hội chủ nghĩa Việt Nam', 'product8.jpg', 1500000, NULL, b'1', '2019-01-22', 'Chất liệu nhựa ABS cao cấp, bền chắc\r\n\r\nTrang bị cần kéo và hệ thống 4 bánh xoay 360 độ linh hoạt\r\n\r\nBên trong ngăn chứa đồ rộng rãi cho bạn thỏa sức mang theo các vật dụng cần thiết', 1, b'1'),
(9, 'Áo thun trơn nam (SP9)', 'product9.jpg', 21000, 10500, b'1', '2018-12-05', 'Áo thun trơn nam form rộng phong cách hàn quốc vải dày mịn Everest E2 (nhiều màu): Chất liệu thun mềm mại, thoáng mát, thấm hút tốt, không lo hầm bí khi mặc. Thiết kế cổ tròn, tay ngắn mang lại cho phái mạnh phong cách nam tính và lịch lãm khi mặc hàng ngày .\r\n\r\nÁo thun nam là một loại trang phục có mặt trong tủ đồ của tất cả các chàng trai. Nếu chiếcáo sơ mimang lại cho các quý ông vẻ thanh lịch, đứng đắn thì áo thun nam lại tạo cho họ phong cách trẻ trung, cá tính đầy cuốn hút. Gần đây, những chiếcáo thun nam trơnluôn là một mẫu trang phục được cánh mày râu lựa chọn bởi lẽ nó dễ dàng khoe được body khỏe khoắn, săn chắc và tiện dụng trong việc tạo cho phái mạnh vẻ ngoài trẻ trung năng động đầy cá tính khi xuống phố hay tham gia các hoạt động thật thoải mái nhưng vẫn hợp xu hướng thời trang. Điều chắc chắn là bạn sẽ gây ấn tượng mạnh đấy nếu là lần đầu tiên diện trang phục này đến công sở. Đừng quên kết hợp thêm với vest hoặc áo khoác bên ngoài sẽ tôn lên nét khỏe khoắn, nam tính của bạn hơn đấy nhé.\r\n\r\nÁo thun nam sành điệucó thiết kế cổ tròn, tay ngắn mang lại cho phái mạnh phong cách nam tính và lịch lãm khi mặc hàng ngày\r\nForm áo ôm vừa vặn thoải mái khi mặc hằng ngàyhay các hoạt động mang lại sự tự tin và năng động cho phái mạnh\r\nÁo trơn màu đơn giản tạo nên nét nam tính mạnh mẽ cho nam giới khi mặc, giúp phái mạnhluôn cá tính,thời thượng\r\nĐường chỉ may đẹp, tinh tế mang đến sự an tâm tuyệt đối cho nam giới khi sử dụng sản phẩm\r\nMàu sắc đa dạng, cá tính,nổi bật,dễ phối đồ, rất cuốn hút khi mặc vận động thể thao hay đi chơi\r\nChất liệu thun mềm mại, thoáng mát, thấm hút tốt, không lo hầm bí khi mặc\r\nKết hợp hài hòa được với các trang phục từ bụi bặm cá tính như quần short, quần jean đến những phong cách đơn giản cổ điển như quần tây quần kaki,..\r\nKích thước: Size XS, S, M , L , XL , XXL\r\n\r\n\r\náo trơn.jpg\r\n\r\n\r\n\r\nThiết kế đơn giản, nam tính\r\n\r\nThiết kế cổ tròn, tay ngắn mang lại cho phái mạnh phong cách nam tính và lịch lãm khi mặc hàng ngày.Form áo ôm vừa vặn thoải mái khi mặc chơi thể thao hay các hoạt động mang lại sự tự tin và năng động cho phái mạnh.Áo thun là loại trang phục tiện dụng nhất dành cho nam giới.Áo thun namđược xem là một món đồ thời trang đặc biệt – đặc biệt do bên trong tủ đồ của bất cứ anh chàng nào cũng có món đồ này.\r\n\r\n\r\n\r\nChất liệu thun mềm mại\r\n\r\nChất liệu thun mềm mại, thoáng mát, thấm hút tốt, không lo hầm bí khi mặc.Theo xu hướng thời trang hiện nayáo với chất liệu thuntheo phong cách thể thao tôn vinh nét đẹp menly, kiểu áo đơn giản dễ phối đồ khi mặc luôn luôn là lựa chọn hàng đầu của cánh mày râu sành điệu, cá tính và yêu thích thời trang. Những chàng trai sẽ lấy đi bao ánh mắt của các nàng khi mặc chiếc áo tinh tế này.\r\n\r\n\r\n\r\nVới thiết kế áo thun,bạn thoả sức trưng diện và phối đồ theo phong cách riêng mà không cần một quy chuẩn nhất định nào. Có thể kết hợp hài hòa được với các trang phục từ bụi bặm cá tính như quần short, quần jean đến những phong cách đơn giản cổ điển như quần tây quần kaki,..Thử style đa phong cách của chiếc áo thun này cùng chúng tôi nào!\r\n\r\nĐÔI NÉT VỀ SẢN PHẨM ÁO THUN NAM\r\nÁo thun namlà trang phục cơ bản và tiện dụng nhất đối với phái mạnh. Hầu như người đàn ông nào cũng đều phải có vài chiếc áo pull nam trong tủ áo của mình. Việc muaáo thun namcũng được bàn tán sôi nổi trên khắp các diễn đàn hay blog cá nhân. Với những ưu điểm tuyệt vời như phong cách đa dạng, kiểu dáng đơn giản và chất liệu thoáng mát,áo thun nam Hàn Quốcđược phái mạnh yêu thích và lựa chọn khi đến công sở hay dạo phố. Bên cạnh đó, áo thun nam cổ trụ cũng được các chàng trai văn phòng yêu thích vì nét lịch sự và trẻ trung. Chỉ cần kết hợpáo thun nambody với quần jeans nam hay quần kaki nam và những phụ kiệnđi kèm như ví nam, túi du lịch nam hay đơn giản hơn là chiếc balo laptop namnăng động, bạn đã có ngay bộ cánh đơn giản mà hiện đại.\r\n\r\n\r\n\r\nCÁC KIỂU ÁO THUN NAM ĐẸP\r\n\r\nBạn sẽ rất ngạc nhiên bởi tính thẩm mỹ mà các kiểuáo thun namcó thể đem lại. Một chiếcáo phôngnam hàng hiệu trong tích tắc có thể biến bạn từ một anh chàng năng động thể thao sang một anh chàng lịch lãm và cá tính. Kết hợpáo thun nam đẹpvới áo khoác có mũ màu sắc trẻ trung cho những ngày cuối tuần vui vẻ, thêm chiếcáo vestcho các cuộc họp quan trọng, bạn sẽ tràn đầy năng lượng và tươi trẻ. Chúng tôi luôn có nhiều sự lựa chọn dành cho bạn, với những sản phẩm mới trong bộ sưu tậpáo thun namcao cấp', 4, b'1'),
(10, 'Áo Thun Phông Nam (SP 10)', 'product10.jpg', 20000, 10000, b'1', '2019-02-22', 'Chất liệu thun mềm mại co giãn tốt , thoáng mát\r\nThiết kế thời trang phù hợp xu hướng hiện nay\r\nKiểu dáng đa phong cách\r\nĐường may tinh tế sắc sảo\r\nÁo thun được thiết kế vẻ đẹp trẻ trung năng động\r\nÁo được thiết kế đẹp, chuẩn form, đường may sắc xảo, vải cotton dày, mịn, thấm hút mồ hôi tạo sự thoải mái khi mặc!\r\nDễ dàng phối trang phục , thích hợp đi chơi đi làm đi dạo phố\r\nThích hợp cho sự kết hợp vứi quần jean, sọt,thể thao!\r\nCó đủ các size XS, S, M, L, XL, 2XL,3XL đáp ứng cho mọi khách hàng\r\nMàu sắc: Có đủ các màu Trắng, Xanh Ngọc, Xanh Chuối, Hồng, Cam, Vàng...\r\nKhách được kiểm tra hàng, mặc thử,ưng ý thanh toán tiền ko ưng ý trả lại cho shiper và hoàn toàn miễn phí\r\nCảm ơn quí khách đã ghé thăm và ủng hộ shop rất mong nhận được sự góp ý của khách hàng để shop ngày càng hoàn thiện hơn nữa', 3, b'0'),
(11, 'Áo Sơ Mi Nữ Cổ Trụ SP11', 'product11.jpg', 300000, 169000, b'1', '2019-02-20', 'Thiết kế cổ trụ, tay phồng xinh xắn\r\nChất liệu cao cấp, bền đẹp\r\nForm suông thoải mái\r\nMang lại vẻ thanh lịch, trẻ trung\r\nCó thể mặc đi làm, đi chơi, dạo phố,…', 2, b'1'),
(12, 'Vali Du Lịch SP 12', 'product12.jpg', 1500000, 0, b'1', '2018-12-09', 'Chất liệu nhựa ABS cao cấp, bền chắc\r\n\r\nTrang bị cần kéo và hệ thống 4 bánh xoay 360 độ linh hoạt\r\n\r\nBên trong ngăn chứa đồ rộng rãi cho bạn thỏa sức mang theo các vật dụng cần thiết', 2, b'1'),
(13, 'Áo thun trơn SP 13', 'product13.jpg', 21000, NULL, b'1', '2019-01-01', 'Đây là SP cũ', 3, b'0'),
(14, 'Áo Thun Phông Nam SP14', 'product14.jpg', 20000, NULL, b'1', '2018-12-19', 'SP quá cũ', 4, b'1'),
(15, 'Áo Sơ Mi Nữ Cổ SP 15', 'product15.jpg', 300000, 169000, b'1', '2018-12-20', 'Thiết kế cổ trụ, tay phồng xinh xắn\r\nChất liệu cao cấp, bền đẹp\r\nForm suông thoải mái\r\nMang lại vẻ thanh lịch, trẻ trung\r\nCó thể mặc đi làm, đi chơi, dạo phố,…', 5, b'1'),
(16, 'Vali Du Lịch American SP16', 'product16.jpg', 1500000, NULL, b'1', '2018-12-12', 'Chất liệu nhựa ABS cao cấp, bền chắc\r\n\r\nTrang bị cần kéo và hệ thống 4 bánh xoay 360 độ linh hoạt\r\n\r\nBên trong ngăn chứa đồ rộng rãi cho bạn thỏa sức mang theo các vật dụng cần thiết', 6, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(10) UNSIGNED NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `productid`, `categoryid`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 6),
(4, 2, 3),
(5, 3, 4),
(6, 4, 5),
(7, 5, 6),
(8, 6, 7),
(9, 7, 8),
(10, 8, 1),
(11, 9, 2),
(12, 10, 3),
(13, 11, 4),
(14, 12, 5),
(15, 14, 6),
(16, 13, 7),
(17, 15, 8),
(18, 16, 3),
(19, 2, 5),
(20, 2, 7),
(21, 3, 6),
(22, 3, 8),
(23, 4, 7),
(24, 5, 2),
(25, 6, 3),
(26, 7, 5),
(27, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `reviewername` varchar(255) NOT NULL,
  `revieweremail` varchar(255) NOT NULL,
  `reviewcontent` text NOT NULL,
  `ratevalue` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producttags`
--

CREATE TABLE `producttags` (
  `id` int(10) UNSIGNED NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `picture`, `title`, `subtitle`, `content`, `link`) VALUES
(1, 'slider1.jpg', 'Tiêu đề 1', 'Nhiều chương trình khuyến mãi lên đến 80%', 'Đây là nội dung của chương trình khuyến mãi ', '#'),
(2, 'slider2.jpg', 'Tiêu đề 2', 'Các thương hiệu nổi tiếng trên toàn thế giới', 'Chúng tôi chỉ bán hàng chỉnh hãng nhập trực tiếp từ Trung Quốc bla bla bla bla bla blabl', '#'),
(3, 'slider3.jpg', 'Tiêu đề 3', 'Chúng tôi thích đổi thì đổi.', 'Công ty chúng tôi không cho phép đổi trả trong bất kỳ tình huống nào hehehehe......', '#'),
(4, 'slider1.jpg', 'Tiêu đề 4', 'Nhiều chương trình khuyến mãi lên đến 80%', 'Đây là nội dung của chương trình khuyến mãi ', '#'),
(5, 'slider2.jpg', 'Tiêu đề 5', 'Các thương hiệu nổi tiếng trên toàn thế giới', 'Chúng tôi chỉ bán hàng chỉnh hãng nhập trực tiếp từ Trung Quốc bla bla bla bla bla blabl', '#'),
(6, 'slider3.jpg', 'Tiêu đề 6', 'Chúng tôi thích đổi thì đổi.', 'Công ty chúng tôi không cho phép đổi trả trong bất kỳ tình huống nào hehehehe......', '#');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenum` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturercategory`
--
ALTER TABLE `manufacturercategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttags`
--
ALTER TABLE `producttags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manufacturercategory`
--
ALTER TABLE `manufacturercategory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttags`
--
ALTER TABLE `producttags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
