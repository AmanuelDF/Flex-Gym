-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 12:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercise_info`
--

CREATE TABLE `exercise_info` (
  `exercise_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `weight_class` varchar(20) NOT NULL,
  `age_class` varchar(20) NOT NULL,
  `suitable_for_cardio` varchar(10) NOT NULL,
  `intensity` varchar(20) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `muscle_group` varchar(30) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise_info`
--

INSERT INTO `exercise_info` (`exercise_id`, `name`, `weight_class`, `age_class`, `suitable_for_cardio`, `intensity`, `image_path`, `muscle_group`, `video`) VALUES
(2, 'Barbell Benchress', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/Barbell Benchpress.jpeg', 'chest', 'https://www.youtube.com/embed/-MAABwVKxok'),
(3, 'Barbell Curl', 'all', 'all', 'yes', 'beginner', 'exercise_images/barbell curl.webp', 'biceps', 'https://www.youtube.com/embed/kwG2ipFRgfo'),
(4, 'Bentover Rows', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/bent over rows.webp', 'back', 'https://www.youtube.com/embed/kBWAon7ItDw'),
(5, 'Bicep Curl', 'all', 'all', 'yes', 'beginner', 'exercise_images/bicep curls.webp', 'biceps', '\"https://www.youtube.com/embed/ykJmrZ5v0Oo\" '),
(6, 'Burpees', 'below 150', 'teens,middle-aged', 'no', 'advanced', 'exercise_images/burpees.png', 'fullbody', 'https://www.youtube.com/embed/qLBImHhCXSw\"'),
(7, 'Bicylcle Crunches', 'all', 'all', 'yes', 'intermediate', 'exercise_images/bycicle crunchs.jpg', 'abdominals', 'https://www.youtube.com/embed/Iwyvozckjak\" '),
(8, 'Cable Curl', 'all', 'all', 'yes', 'beginner', 'exercise_images/cable curls.webp', 'biceps', 'https://www.youtube.com/embed/NFzTWp2qpiE\" '),
(9, 'Cable Chest fly', 'all', 'teens,middle-aged', 'yes', 'beginner', 'exercise_images/cable fly.jpg', 'chest', 'https://www.youtube.com/embed/ETtXO4FW1EU\"'),
(10, 'Chest Dips', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercice_images/chest dips.webp', 'chest', 'https://www.youtube.com/embed/dX_nSOOJIsE\" '),
(11, 'Deadlift', 'all', 'teens,middle-aged', 'no', 'intermediate', 'exercise_images/deadlift.jpg', 'fullbody', 'https://www.youtube.com/embed/vRKDvt695pg\" '),
(12, 'Dumbell Benchpress', 'all', 'all', 'yes', 'beginner', 'exercise_images/dumbell bench press.png', 'chest', 'https://www.youtube.com/embed/VmB1G1K7v94\"  '),
(13, 'Eliptical Machine', 'all', 'teens,middle-aged', 'no', 'beginner', 'exercise_images/eliptical machine.jpg', 'fullbody', 'https://www.youtube.com/embed/j38LNpTLwzY\" '),
(14, 'Frontal Raises', 'all', 'all', 'yes', 'beginner', 'exercise_images/frontal raises.webp', 'shoulder', 'https://www.youtube.com/embed/-t7fuZ0KhDA\" '),
(15, 'Glute Bridge', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/glute bridge.jpg', 'glute', 'https://www.youtube.com/embed/OUgsJ8-Vi0E\" '),
(16, 'Hammer Curls', 'all', 'all', 'yes', 'beginner', 'exercise_images/hammer curls.webp', 'biceps', 'https://www.youtube.com/embed/TwD-YGVP4Bk\"'),
(17, 'Hip Thrust', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/hip thurst.jpg', 'glute', 'https://www.youtube.com/embed/Zp26q4BY5HE'),
(18, 'Lateral Raises', 'all', 'all', 'yes', 'beginner', 'exercise_images/lateral raises.jpg', 'shoulder', 'https://www.youtube.com/embed/kDqklk1ZESo'),
(19, 'Lat Pulldown', 'all', 'all', 'yes', 'inermediate', 'exercise_images/lat-pulldown.jpg', 'back', 'https://www.youtube.com/embed/Z_3xHwuO8Tk'),
(20, 'Leg Raises', 'all', 'all', 'yes', 'beginner', 'exercise_images/leg raises.webp', 'legs', 'https://www.youtube.com/embed/JB2oyawG9KI'),
(21, 'Leg Press', 'all', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/leg-press.webp', 'legs', 'https://www.youtube.com/embed/IZxyjW7MPJQ'),
(22, 'Lunges', 'below 150', 'all', 'yes', 'beginner', 'exercise_images/lunges.jpg', 'legs', 'https://www.youtube.com/embed/wrwwXE_x-pQ'),
(23, 'Dumbbell Lunges', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/dumbbell lunges.jpg', 'legs', 'https://www.youtube.com/embed/D7KaRcUTQeE'),
(24, 'Military Press', 'all', 'all', 'yes', 'beginner', 'exercise_images/military press.webp', 'legs', 'https://www.youtube.com/embed/2yjwXTZQDDI'),
(25, 'Mountain Climbers', 'below 150', 'all', 'no', 'intermediate', 'exercise_images/mountain climbers.jpg', 'abdominals', 'https://www.youtube.com/embed/nmwgirgXLYM'),
(26, 'Crunch', 'all', 'all', 'yes', 'beginner', 'exercise_images/normal crunch.jpg', 'abdominals', 'https://www.youtube.com/embed/MKmrqcoCZ-M'),
(27, 'plank', 'below 150', 'all', 'yes', 'intermediate', 'exercise_images/plank.jpg', 'abdominals', 'https://www.youtube.com/embed/pSHjTRCQxIw'),
(28, 'Push Ups', 'below 150', 'all', 'yes', 'beginner', 'exercise_images/push-ups.webp', 'chest', 'https://www.youtube.com/embed/IODxDxX7oi4'),
(29, 'Russian Twist', 'below 150', 'all', 'yes', 'intermediate', 'exercise_images/russian twist.jpg', 'abdominals', 'https://www.youtube.com/embed/wkD8rjkodUI'),
(30, 'Seated Row', 'all', 'all', 'yes', 'beginner', 'exercise_images/seated row.jpg', 'back', 'https://www.youtube.com/embed/GZbfZ033f74'),
(31, 'Skull Crusher', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/skull crusher.png', 'triceps', 'https://www.youtube.com/embed/d_KZxkY_0cM'),
(32, 'Squats', 'all', 'all', 'yes', 'beginner', 'exercise_images/squats.webp', 'legs', 'https://www.youtube.com/embed/IB_icWRzi4E'),
(33, 'Stationary Bicycle', 'all', 'all', 'no', 'beginner', 'exercise_images/stationary bycicle.png', 'fullbody', 'https://www.youtube.com/embed/rEqRmKAQ5xM'),
(34, 'T-bar Row', 'below 150', 'teens,middle-aged', 'yes', 'intermediate', 'exercise_images/T-Bar-Row.jpg', 'back', 'https://www.youtube.com/embed/j3Igk5nyZE4'),
(35, 'Treadmil', 'all', 'all', 'yes', 'beginner', 'exercise_images/treadmil.webp', 'fullbody', 'https://www.youtube.com/embed/8i3Vrd95o2k'),
(36, 'Tricep Pushdown', 'all', 'all', 'yes', 'beginner', 'exercise_images/tricep pushdown.webp', 'tricep', 'https://www.youtube.com/embed/2-LAMcpzODU'),
(37, 'Weighted Squats', 'below 150', 'teens,middle-aged', 'no', 'advanced', 'exercise_images/weighted squats.jpg', 'legs', 'https://www.youtube.com/embed/MVMNk0HiTMg');

-- --------------------------------------------------------

--
-- Table structure for table `exercise_user`
--

CREATE TABLE `exercise_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `exercise_id` int(11) DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `completed` tinyint(1) DEFAULT NULL,
  `sets` int(11) NOT NULL,
  `reps` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise_user`
--

INSERT INTO `exercise_user` (`id`, `user_id`, `exercise_id`, `progress`, `completed`, `sets`, `reps`, `days`) VALUES
(10, 29, 8, 0, 0, 2, 9, 4),
(11, 29, 14, 0, 0, 2, 5, 3),
(12, 29, 21, 0, 0, 2, 10, 5),
(13, 29, 4, 0, 0, 2, 9, 4),
(14, 29, 9, 0, 0, 2, 8, 4),
(15, 29, 3, 0, 0, 2, 7, 4),
(16, 29, 12, 0, 0, 2, 5, 3),
(17, 29, 24, 0, 0, 2, 5, 3),
(18, 29, 36, 0, 0, 1, 7, 3),
(19, 31, 17, 0, 0, 3, 10, 5),
(20, 31, 30, 0, 0, 1, 5, 4),
(21, 31, 14, 0, 0, 2, 7, 3),
(22, 31, 36, 0, 0, 2, 5, 4),
(23, 31, 32, 0, 0, 2, 8, 4),
(24, 31, 18, 0, 0, 1, 6, 4),
(25, 31, 7, 0, 0, 3, 9, 5),
(26, 31, 4, 0, 0, 2, 10, 4),
(27, 31, 3, 0, 0, 2, 8, 3),
(28, 37, 2, 0, 0, 3, 9, 5),
(29, 37, 12, 0, 0, 1, 6, 3),
(30, 37, 16, 0, 0, 2, 6, 3),
(31, 37, 3, 0, 0, 1, 6, 4),
(32, 37, 24, 0, 0, 2, 8, 3),
(33, 37, 20, 0, 0, 2, 8, 3),
(34, 37, 21, 0, 0, 3, 9, 5),
(35, 37, 17, 0, 0, 3, 10, 5),
(36, 37, 33, 0, 0, 2, 9, 3),
(37, 38, 3, 0, 0, 2, 8, 4),
(38, 38, 30, 0, 0, 2, 5, 4),
(39, 38, 18, 0, 0, 2, 9, 4),
(40, 38, 24, 0, 0, 1, 5, 4),
(41, 38, 5, 0, 0, 1, 8, 3),
(42, 38, 20, 0, 0, 2, 6, 4),
(43, 38, 16, 0, 0, 2, 8, 3),
(44, 38, 8, 0, 0, 1, 8, 4),
(45, 38, 35, 0, 0, 2, 7, 4),
(46, 39, 15, 100, 1, 2, 9, 4),
(47, 39, 35, 100, 1, 1, 5, 4),
(48, 39, 36, 100, 1, 2, 5, 3),
(49, 39, 17, 100, 1, 3, 9, 5),
(50, 39, 3, 100, 1, 2, 8, 4),
(51, 39, 12, 100, 1, 2, 5, 3),
(52, 39, 30, 100, 1, 2, 5, 4),
(53, 39, 2, 100, 1, 2, 9, 4),
(54, 39, 5, 100, 1, 1, 8, 4),
(73, 96, 9, 0, 0, 1, 9, 3),
(74, 96, 5, 0, 0, 2, 5, 4),
(75, 96, 20, 0, 0, 1, 5, 3),
(76, 96, 35, 0, 0, 1, 6, 3),
(77, 96, 24, 0, 0, 1, 7, 4),
(78, 96, 18, 0, 0, 1, 6, 4),
(79, 96, 30, 0, 0, 2, 9, 4),
(80, 96, 26, 0, 0, 2, 9, 4),
(81, 96, 12, 0, 0, 2, 9, 3),
(82, 97, 36, 25, 0, 1, 8, 3),
(83, 97, 35, 25, 0, 2, 7, 3),
(84, 97, 32, 25, 0, 1, 7, 3),
(85, 97, 9, 25, 0, 1, 7, 3),
(86, 97, 30, 25, 0, 1, 9, 4),
(87, 97, 24, 25, 0, 2, 9, 4),
(88, 97, 5, 25, 0, 2, 6, 4),
(89, 97, 3, 25, 0, 1, 8, 3),
(90, 97, 26, 25, 0, 1, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `weight` int(11) NOT NULL,
  `disease` varchar(10) NOT NULL,
  `intensity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `age`, `gender`, `weight`, `disease`, `intensity`) VALUES
(21, 'amanuel', 'ayana', 'amanuelayana11@gmail.com', '$2y$10$oqcF2y6e7v0abHP2ehM.v.vfGcz3x2sCwExW.K3idt95tVcHgUgi2', 21, 'male', 91, 'no', 'beginner'),
(22, 'Rainbow', 'Johnson', 'rainbow@gmail.com', '$2y$10$GrBKYsCWlQNUl5ztc2RiW./eiAtyxHV2PGOI.p6rUy2UuU9jo8MYm', 37, 'female', 121, 'no', 'beginner'),
(23, 'amantae', 'chloe', 'amanchole@asdfa.csdc', 'Amanier!123AS', 51, 'female', 160, 'yes', 'beginner'),
(24, 'Amanuel', 'Ayana', 'thenweSmi@fadfa.caca', '', 27, 'male', 98, 'yes', 'beginner'),
(25, 'Amayua', 'Adfasdf', 'adfad@asdfasd.cdcs', '', 0, '', 0, '', ''),
(26, 'Amuka', 'Amiied', 'adfa@vs.csdc', '', 42, 'male', 90, 'yes', 'intermedia'),
(27, 'adfasdf', 'adfjaklsdj', 'adfasd@asdfad.csdd', '', 33, 'male', 114, 'yes', 'intermedia'),
(28, 'hkjdfhakjd', 'jakljdhf', 'adhjkhjk@hkah.cad', '', 51, 'male', 160, 'no', 'beginner'),
(29, 'adaet', 'etdse', 'adfa@dgsdage.cseadfa', '', 51, 'female', 160, 'yes', 'intermedia'),
(30, 'amanyuel', 'aefhka', 'adfa@lk.sdjl', '', 21, 'male', 82, 'no', 'advanced'),
(31, 'israel', 'adesanya', 'isrish@gmail.com', '', 51, 'male', 76, 'yes', 'intermedia'),
(32, 'Amanuel', 'Ayana', 'ayanayana@gmail.com', '', 0, '', 0, '', ''),
(33, 'Abel', 'Berihun', 'abelberihun@gmail.com', '', 0, '', 0, '', ''),
(34, 'Abelua', 'adjfla', 'akjdfla@gmail.com', '', 0, '', 0, '', ''),
(35, 'Abelua', 'adjfla', 'akjfadfla@gmail.com', '', 0, '', 0, '', ''),
(36, 'Abelua', 'adjfla', 'akjdfadffla@gmail.com', '', 0, '', 0, '', ''),
(37, 'trekjlk', 'ajfjklakl', 'akdjfl@fkljaldk.conlk', '$2y$10$7NMChcCGdf4p5I49lq07j.oQBHQjjonWEWuHI4O1XgW0ZRtSpsjey', 51, 'female', 160, 'no', 'advanced'),
(38, 'amanuel', 'lugaluga', 'rafaelo@kjl.csd', '$2y$10$5/fSWbiu9SpOKOlB6.PmB.Cotevv7MUSKyeR0HX.B/PtKwn9X0TXW', 51, 'female', 160, 'yes', 'beginner'),
(39, 'Truman', 'Trudow', 'trudow@gmail.com', '$2y$10$tdpYi5TC4ke5OEzhVzD2t.PEHViEIcd5y6A/HqE7yCEz6MQKMyxPu', 51, 'male', 84, 'yes', 'intermedia'),
(40, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(41, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(42, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(43, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(44, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(45, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(46, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(47, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(48, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(49, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(50, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(51, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(52, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(53, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(54, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(55, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(56, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(57, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(58, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(59, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(60, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(61, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(62, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(63, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(64, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(65, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(66, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(67, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(68, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(69, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(70, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(71, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(72, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(73, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(74, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(75, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(76, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(77, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(78, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(79, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(80, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(81, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(82, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(83, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(84, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(85, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(86, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(87, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(88, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(89, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(90, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(91, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(92, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(93, 'fklal', 'jkjhkja', 'dkja@jkhkj.cadf', 'kskjdADgas234@#dre', 0, '', 0, '', ''),
(96, 'lovely', 'ldy', 'lovelylady@gmail.com', '$2y$10$nDXxOdn.quTMQ7k.kBOz3OX/1NwTecdL14Eh47dRijZg7zjk6Of8y', 31, 'female', 102, 'yes', 'beginner'),
(97, 'The ', 'Rock', 'dwayne@gmail.com', '$2y$10$WILmaMB3M9WmePSY.UuBv.N0g7wU4VdXRogT/IJFpkxx/gRu/wZrK', 51, 'female', 160, 'yes', 'beginner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise_info`
--
ALTER TABLE `exercise_info`
  ADD PRIMARY KEY (`exercise_id`);

--
-- Indexes for table `exercise_user`
--
ALTER TABLE `exercise_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `exercise_id` (`exercise_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise_info`
--
ALTER TABLE `exercise_info`
  MODIFY `exercise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `exercise_user`
--
ALTER TABLE `exercise_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercise_user`
--
ALTER TABLE `exercise_user`
  ADD CONSTRAINT `exercise_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `personal_info` (`user_id`),
  ADD CONSTRAINT `exercise_user_ibfk_2` FOREIGN KEY (`exercise_id`) REFERENCES `exercise_info` (`exercise_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;