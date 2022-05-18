-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 11-11-12 12:00 
-- 서버 버전: 5.1.41
-- PHP 버전: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `one`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `schedular`
--

CREATE TABLE IF NOT EXISTS `schedular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text CHARACTER SET euckr NOT NULL,
  `contents` text CHARACTER SET euckr NOT NULL,
  `writing_date` text CHARACTER SET euckr NOT NULL,
  `start_year` int(11) NOT NULL,
  `start_month` int(11) NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `end_month` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `select_val` text CHARACTER SET euckr NOT NULL,
  `etc` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- 테이블의 덤프 데이터 `schedular`
--

INSERT INTO `schedular` (`id`, `subject`, `contents`, `writing_date`, `start_year`, `start_month`, `start_date`, `end_year`, `end_month`, `end_date`, `select_val`, `etc`) VALUES
(1, '홍두께', '고향내려갔다옴', '2011-11-08-14-50', 2011, 11, 9, 0, 0, 0, '청', 1),
(2, '홍길동', '탐관오리 응징하러 가야함', '2011-11-08-15-19', 2011, 11, 12, 0, 0, 0, '교', 1),
(3, '이영박', '이름 개명하러 감', '2011-11-08-15-31', 2011, 11, 10, 0, 0, 0, '교', 2),
(4, '나국상', '피부관리하러 가야함', '2011-11-08-15-32', 2011, 11, 16, 0, 0, 0, '휴', 1),
(11, '홍길동', '율숙도 관광비행목적', '2011-11-10-15-12', 2011, 11, 10, 0, 0, 0, '연', 1),
(12, '홍길동', '비행', '2011-11-10-15-13', 2011, 11, 16, 0, 0, 0, '연', 2),
(13, '박무혁', '그냥 쉬고 싶어서', '2011-11-10-15-14', 2011, 11, 24, 0, 0, 0, '연', 2),
(16, 'dfdfdfd', 'dfdfdf', '2011-11-10-16-03', 2011, 11, 22, 0, 0, 0, '연', 3),
(17, 'ㄷㄹㄷㄹㄷㄹㄷ', 'ㄷㄹㄷㄹㄷ', '2011-11-11-10-02', 2011, 11, 11, 2011, 11, 11, '연', 2);
