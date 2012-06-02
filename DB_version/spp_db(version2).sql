-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- المزود: localhost
-- أنشئ في: 02 يونيو 2012 الساعة 14:05
-- إصدارة المزود: 5.0.51
--  PHP إصدارة: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- قاعدة البيانات: `spp_db`
-- 

-- --------------------------------------------------------

-- 
-- بنية الجدول `bill`
-- 

CREATE TABLE `bill` (
  `ID` int(11) NOT NULL auto_increment,
  `Bill_Paid` double NOT NULL,
  `Bill_Total` double NOT NULL,
  `dateTime_` datetime NOT NULL,
  `Cust_ID` int(11) NOT NULL,
  `Discount_value` double NOT NULL,
  `Bill_Total_Cost` double NOT NULL,
  `CompanyID` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- إرجاع أو إستيراد بيانات الجدول `bill`
-- 


-- --------------------------------------------------------

-- 
-- بنية الجدول `bill_details`
-- 

CREATE TABLE `bill_details` (
  `Bill_ID` int(11) NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `Item_Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- إرجاع أو إستيراد بيانات الجدول `bill_details`
-- 


-- --------------------------------------------------------

-- 
-- بنية الجدول `company`
-- 

CREATE TABLE `company` (
  `CompanyID` int(11) NOT NULL auto_increment,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyAddress` varchar(255) NOT NULL,
  PRIMARY KEY  (`CompanyID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- إرجاع أو إستيراد بيانات الجدول `company`
-- 


-- --------------------------------------------------------

-- 
-- بنية الجدول `customers`
-- 

CREATE TABLE `customers` (
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Account` int(55) NOT NULL,
  `ID` int(55) NOT NULL auto_increment,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- إرجاع أو إستيراد بيانات الجدول `customers`
-- 


-- --------------------------------------------------------

-- 
-- بنية الجدول `items`
-- 

CREATE TABLE `items` (
  `ID` int(11) NOT NULL auto_increment,
  `Item_name` varchar(255) NOT NULL,
  `Item_price` double NOT NULL,
  `Item_barcode` varchar(255) NOT NULL,
  `Item_cost` double NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `Type_ID` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- إرجاع أو إستيراد بيانات الجدول `items`
-- 


-- --------------------------------------------------------

-- 
-- بنية الجدول `item_type`
-- 

CREATE TABLE `item_type` (
  `ID` int(55) NOT NULL auto_increment,
  `TypeName` varchar(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- إرجاع أو إستيراد بيانات الجدول `item_type`
-- 


-- --------------------------------------------------------

-- 
-- بنية الجدول `users`
-- 

CREATE TABLE `users` (
  `UserName` varchar(255) NOT NULL,
  `ID` int(55) NOT NULL auto_increment,
  `Password` varchar(255) NOT NULL,
  `Status` smallint(1) NOT NULL,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- إرجاع أو إستيراد بيانات الجدول `users`
-- 

