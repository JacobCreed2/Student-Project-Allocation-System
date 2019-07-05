<?php
include ('../resources/config.php');
$sql = "DROP TABLE users";
$sql1 = "CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(4000) NOT NULL,
  `UserTypeId` int(1) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `SupervisorId` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$sql2 = "INSERT INTO `users` (`Id`, `Username`, `Password`, `UserTypeId`, `StudentId`, `SupervisorId`) VALUES
(1, 'DButton', '$2y$10\$MMaD8r.vjOt7gH4ovSkwqeyjOGK7r4BmlLKu9K2RmLWCmjvUID9Ee', 1, NULL, 1),
(2, '10001', '$2y$10\$U3idl4Yu5PG9a9srh5cS8utRLXFzp29dEDffV.GAGF0nqbOzTCNW6', 3, 1, NULL),
(3, '20001', '$2y$10\$.NAGEJZNmQBAx0gSl17g.OrCEbhFIIU2qZjH8DL9kI2DBoLfrsHG.', 2, NULL, 2),
(5, '10002', '$2y$10\$VUyfjBun9TJj7JzvOX3aFOufV8XtE/CyJZ7eNK.DT1MCkdDSmbhT.', 3, 3, NULL),
(9, '10003', '$2y$10\$VvIyA2a8uFQWtc32xxgWnOv/c5F1YIPJLhivUMA4kPMA6IbnfVsW2', 3, 7, NULL),
(10, '10004', '$2y$10\$dUqvacb4MoUXcbGlP.LOAu/0AztVr9V9ONcBzoWOMBpUAdmslIxZa', 3, 8, NULL),
(11, '20002', '$2y$10\$sqfup2Tgk5tOddmBLd7RbOgSeFOGvCnxvMU4FKgN7racHMbOIO2qm', 2, NULL, 3),
(12, '10005', '$2y$10\$ezD4Yq0pty1ZSaJRkpvGyuuTegr/dGOlzL3Cg1PoGrm8c6XAosJ7i', 3, 9, NULL),
(13, '10006', '$2y$10\$oBORmczrecRJgd4kjwOG8.vlV1A3KZrZ0ueY98nsPJAtjotXJJRna', 3, 10, NULL),
(15, '10007', '$2y$10\$A35tQC5NoO18fZuGaXsxnu/rrdNAC53xtVzwLeTDXbM5s/okm.fdy', 3, 11, NULL),
(16, '10008', '$2y$10\$jmckgzliOK6w1pGQj9AqVOs/z48PiCI968Gxel44fkeNeIz8Hm1zS', 3, 12, NULL),
(17, '20003', '$2y$10\$8c.aP28hnYMzaVD8wvEh8OCViVjXgoFcufAuhI.w8T2hSozFVMVaK', 2, NULL, 5),
(18, '23661', '$2y$10\$0p8NsOFkI5Wz/8lk5eNZIuvEkHj9nIVF9VbBtLa688p3czh4RzNGi', 2, NULL, 48),
(19, '29161', '$2y$10\$0bfT/mAk/bwGoQwM4Lhez.9fAWBIMDaXzGNd44AL4qtJ2ghYCe1JK', 2, NULL, 49),
(20, '29896', '$2y$10\$fGBYZX7AJSUt9ZG6VFCWQeqmfdxlLP0NRLvmP/3H9oX8cEH19/m4u', 2, NULL, 50),
(21, '22390', '$2y$10\$US/daQFQL6TnrpeMnHLE8u5lg2B20Sc8u.1KfD1l6ntOopTTs2CQi', 2, NULL, 51),
(22, '25263', '$2y$10\$NO1jSOmt6EVar0/P1zRms.H1iqtaj8SL8ByJQoH4ZY.EEo8EQhhC2', 2, NULL, 52),
(23, '21776', '$2y$10\$ZoShat/YpQmAVB0nPPxSDugEwKuJvbGHzgcY0xZ/vt8X6VU9.kVU.', 2, NULL, 53),
(24, '29671', '$2y$10\$JGmo0b/IFjBXESqyvfr51ughfvCwRVwtIbk1C1GLTJmwkV/gyBBuW', 2, NULL, 54),
(25, '29499', '$2y$10\$NuSP80gWSbu9axfOsu9rzupD8IVS0vIWa/ccBIWTKEPKHXZqsSPsO', 2, NULL, 55),
(26, '27245', '$2y$10\$jAB9e0LkF.BMlElw9AVZtOv8G/84i4aJ7e1Z7QEgIobXVvant7tcm', 2, NULL, 56),
(27, '27613', '$2y$10\$jvCwEMpTuQOx47mdlVeIhO6WTAlJa0sZm5QwRxRVpyAlLIKZfkUv.', 2, NULL, 57),
(28, '29576', '$2y$10\$1wxi/FteI32wHNxR.HQ3Ne1fRReLma2Y7.DbOkwtZfad4uTVP4zLG', 2, NULL, 58),
(29, '29839', '$2y$10\$OY2qpGzNL0q.rQlBzJLC7usBIdheryqZyeQoDmhHvMPbCQOGjtj1i', 2, NULL, 59),
(30, '27090', '$2y$10\$nlpX2szIcZHMo1yZnpw3.eVB0bKTpy5pV6XIAMUSZfhR0rAdQt1ve', 2, NULL, 60),
(31, '21975', '$2y$10\$ha65pNcXjgPjiunAWK1LUeTEA0TOYlQnkehVW6Z5sv3aVPz6xNKGW', 2, NULL, 61),
(32, '21559', '$2y$10\$qaTNewhFlYWOoaCVJqF8lO/VjfGyJRSPS8IevdsJIBTAUYA9b4rDe', 2, NULL, 62),
(33, '24319', '$2y$10\$6HlJQ5rr9U7fDjZ8zygX9O9RIWLwZa4iaV63C1BGmFwC8N7OsDPBG', 2, NULL, 63),
(34, '27607', '$2y$10\$NFyU32rt0WGTuAObbbktMek7fqCJpPelh0dKgmhRTUDNYiw9CLXja', 2, NULL, 64),
(35, '28636', '$2y$10\$M8viJGAoVMzLA3vQb0vuqu/y4zhlSgArtBrpARTvjhsqPPIGAAeCu', 2, NULL, 65),
(36, '27280', '$2y$10\$XYasHUs8.sfM7WG5t37mB.UOekgxkE7Bon825rdfuJSvIDzR.HVFW', 2, NULL, 66),
(37, '26395', '$2y$10\$b4B00nXZ5bBJQFpj8dtEtuBnMcLcGgCbmtJBnu/ZhJOhItkTFLZ0u', 2, NULL, 67),
(38, '27641', '$2y$10\$BHHbByw0gXMXfkevVowA6OblqJ8KFKbrhtiLTRFOvtNAVjD6Sfjlu', 2, NULL, 68),
(39, '26024', '$2y$10\$ZB9qlX1qwZMU/yOjSatAauO7PxUGUlsTJo2GAz130ZIehEoRzfda.', 2, NULL, 69),
(40, '23438', '$2y$10\$V8zD93ecGoG5wbQrPcvYSerXWWTK/IBFdb4yzXZWHlFFZV4TlgjLS', 2, NULL, 70),
(41, '27661', '$2y$10\$vz3Zm6Zj./YLs2PgihigxeQVfp1NGd1RUDd11CmKHptMlhpiIVMV.', 2, NULL, 71),
(42, '28046', '$2y$10\$yEBdsPdgvP8XjrO0QAq/s.IxlWg4gZ2Dsk8pDCZkRQX1srHvcDoNq', 2, NULL, 72),
(43, '28567', '$2y$10\$kpJuMDDzg17rF5htjTsLSeX5.exKrm6RCwwNiVDvK0pXKsVhoC1sG', 2, NULL, 73),
(44, '27052', '$2y$10\$GfcPKR51ItUh62SiEpTVDe345.6hl23ev5fjmJ128rH5CkKikzc7.', 2, NULL, 74),
(45, '27361', '$2y$10\$n5l8ULGZJWzOnck6JzU0wOj.0jQfrNkklZs/8loN/JL9chb1J1kwO', 2, NULL, 75),
(46, '25088', '$2y$10\$V/LJSwe36sAAyKSsU/EFDOiCdXqmL7hfsSHkQQaDy5LPve5jXiBZW', 2, NULL, 76),
(47, '24824', '$2y$10\$ov8xnZXABedgwA7sUeCZAudNEI698xpO/KsDk9Xz.pYIqa3d6BlQq', 2, NULL, 77),
(48, '28304', '$2y$10\$FKTt5Gyc.Fd6oLhkcg46Y.wuxCfeBPXNolHEISvul8WP.H2eI96cG', 2, NULL, 78),
(149, '14257', '$2y$10\$baDfqqkzFNK4uIz3SZVK6uJsOg6ppyycT8u8wQ4iVSCZgwc.Xu78q', 3, 215, NULL),
(150, '11249', '$2y$10\$tseHzh0pSHNUh5jaJqicAuIr/zWf8q0NjDKWfpVDUpe.SxMRukc3i', 3, 216, NULL),
(151, '16848', '$2y$10\$vRkH8nPxQzMQkn.EEzM4GOyci.tIneDwdYpD1eb9cASaYqwJZLpee', 3, 217, NULL),
(152, '10066', '$2y$10\$GNit7ZonYHZoXD4nJ.gDOO82.HDp/eGcCgIl66OzHD7YBd0rUiS8i', 3, 218, NULL),
(153, '11444', '$2y$10\$iHG6U4bBFWiW1hO2kcRmtu3zCNi4ZzrtOywAFgiqeDleLJ1vosL8i', 3, 219, NULL),
(154, '15010', '$2y$10\$gKXnA99A.JhkwcGAJI23V.8/AxoF2YWg86EpE.2vJclxIJH1RgagK', 3, 220, NULL),
(155, '13638', '$2y$10\$XBVSSrTR88ShyPWHvsyzeejQqA2bSpx/hAYwnyF/Z0TNhwd6idGSK', 3, 221, NULL),
(156, '19682', '$2y$10\$dtWNbiBdui77YpanQkcntuVcNgnpkKjcNdz6v4j0Wzso2IxZ9AFwO', 3, 222, NULL),
(157, '14437', '$2y$10\$VgWRHmC0QckxdTixn4b2HuKmrH1vN8NDALFAN/IcIWShhdmv/E1aa', 3, 223, NULL),
(158, '19976', '$2y$10\$sJd.f24pxYWzuFYB1n0IX.ssgyLuAwYcMlUf/kg/epxzDd2Y948pW', 3, 224, NULL),
(159, '15437', '$2y$10\$Uhlt/eSCJ/EYTYb6fA4TYOAMnz73ZijR9iyY8QNhv1qpvppnL5.xe', 3, 225, NULL),
(160, '12902', '$2y$10\$6VTPytIC6giNVP/UqYlvc.8fRBtcGerqCskZQZTc7Fhj3E35Zd5NO', 3, 226, NULL),
(161, '17211', '$2y$10\$Z.gRkNoHWDWcyGxZmoqGYeEMyVexuPmqw7cL7FpSlxgFystTTurWe', 3, 227, NULL),
(162, '14708', '$2y$10\$VCgJY5sMxVyx0Tm6AumMpusAdwCtuyzG0VrWdAz8n4N0z8PgUlGJG', 3, 228, NULL),
(163, '16584', '$2y$10\$gmx2KCt52uXuMFKJnY38KuYdgOzAlGJ1MdtuZG/4w.qQauftrHRki', 3, 229, NULL),
(164, '14215', '$2y$10\$2m/HLI6bccBzviG7WA2Vb.6fTqt2RvBy6mqy2Ob8p14EBQsxRU23K', 3, 230, NULL),
(165, '11242', '$2y$10\$rrURsGgxAnNjNfy1xo5ZGeT1HtZkXC8HSUhmh0woKsmMyqGHnwFDu', 3, 231, NULL),
(166, '11999', '$2y$10\$c5CnFzl6UMkMdGUSHKtnU.zXF78A33sqaEF0ZLR30MWvVfVsk3pTW', 3, 232, NULL),
(167, '17156', '$2y$10\$x/Yh5Tx60oEmcsU8JUWkEOlzKCR0Vw9nSA.xM5VaKFh/pc.BFvtOu', 3, 233, NULL),
(168, '16924', '$2y$10\$nlmkJG.oLuwOpQZbbCYPxe6i00sox8xYkA5gBIYJuRGuK351pqU7G', 3, 234, NULL),
(169, '15047', '$2y$10\$yU6AIHypgrY8YdlReAbD9.ejevESnu08ri3ZC/KYzVLzh38kS26eO', 3, 235, NULL),
(170, '13552', '$2y$10\$9Hr1u9lLkVrZzTKrBMxBVOUyJ5NhtNRQ8K3ADHp/IPyZlL4ivDyA.', 3, 236, NULL),
(171, '17997', '$2y$10\$wsR2/kGmRJRkyqWW83HqeeAXXGT08Jy4lWXlTWwRVj5r1qXXzVUYa', 3, 237, NULL),
(172, '15681', '$2y$10\$zeauxuh/xTE./YPe80o/W.nVM.VObPgjgmdfC5eA8cOsQJgI8CK66', 3, 238, NULL),
(173, '16687', '$2y$10\$Or7VZnIFj48JL.eB7ZXTNeam2RfJoNNQsP6lF205hYZKPwSnFFU0K', 3, 239, NULL),
(174, '15892', '$2y$10\$rgmlwJGQG3wNkZlkQo0l3O45O0TUKrwrao3mk/WmJDmMkkhDenU9m', 3, 240, NULL),
(175, '13965', '$2y$10\$yEiYG94tfYOxJansVnWX9Ow4fxHCJZ9M3tdVsCN/idn.ok9fo1gum', 3, 241, NULL),
(176, '13496', '$2y$10\$0onotq7BVh3/UvkmQLl/K.R7wDcKZgbsd/s9hkjZimMd.ADENV50O', 3, 242, NULL),
(177, '11101', '$2y$10\$3XqytkjrnbTUB4.vsfzDCekQtPL8ewNfKpU65ZywLHi0.kDB24ij6', 3, 243, NULL),
(178, '10592', '$2y$10\$/O3JiQxs9ftdyZTmH5CzGuX8BOriLkUdkPBgkEmc3/2Obi1Mf/ADO', 3, 244, NULL),
(179, '14655', '$2y$10\$6BCHiLNXUsVaH7qtJrJdSe8/VclZhHX3PytyiONBUSSkJkJi9RinW', 3, 245, NULL),
(180, '13801', '$2y$10\$r7BEAAcn6qOWGR31lgkoT.eh9FjqMVTQgocY2ZjlXoP8WJgkBVPxa', 3, 246, NULL),
(181, '12884', '$2y$10\$wO54ybE1TQ.702DHguM5L.eVSRa9nvbGTYFqLJmgngb9eJEKVA32O', 3, 247, NULL),
(182, '16308', '$2y$10\$pmxB/dz9NaBKrzQtUG3.2uwWkrEOdFaZP1HybcKX7nhW9YJaewPie', 3, 248, NULL),
(183, '17377', '$2y$10\$EbCfNX/qfhHYgS6JprmvieGISbWnfRcnxV9b6iGGy/wOWWTQp.0zm', 3, 249, NULL),
(184, '16236', '$2y$10\$kC4s6jqQRUSrLtjt0.LgxeVNoKSYb3kRdHRG.rxndS8AyLNDPrKfK', 3, 250, NULL),
(185, '11810', '$2y$10\$eeNvMhmiMC703axQhrlbn.KsLdzs9GRLfj.QTsR4hHPq/U8WYxfoa', 3, 251, NULL),
(186, '15432', '$2y$10\$GVRkj2F4lH8vV8HS3doquOG/iuUM3c2AlzjGF/qOuzi03LbwPH6V6', 3, 252, NULL),
(187, '17095', '$2y$10\$KgaZJSNOKOeY5Ac1Xb6VjOAiMBKWFCsV1mghs8.1VRCnsGHS6cAZa', 3, 253, NULL),
(188, '16862', '$2y$10\$7zitsUwpz4u1oIZszAy0BevfkCIcWTdp0koKiDCxFF.wADUwzNway', 3, 254, NULL),
(189, '13584', '$2y$10\$QgraSNLWoWRckJ45Zh8kpe0GQJP.3HTOPkgIbe/5oi3j9y.WSMPqq', 3, 255, NULL),
(190, '12819', '$2y$10\$UsdYhSa5rWNaEofQioW7uOhpeLWCPF1LKelP0cxzn8uuFixsJ5dgu', 3, 256, NULL),
(191, '15064', '$2y$10\$1o4IF1CBHBOU0f/ChdFsSOz5nbomJMbPznPcjPVDTH7kk5bEuoZM6', 3, 257, NULL),
(192, '11731', '$2y$10\$/faTK1We2tpTexLp/nzXxuPJBaMFAb9xay4agSO3/9HWrawexSIjO', 3, 258, NULL),
(193, '16455', '$2y$10\$eLPYfRg3pZRei1..zXQd9.sDn99wbkv8KviOg9K2ZdPo0sp32c6rW', 3, 259, NULL),
(194, '17200', '$2y$10\$2bqbODXwCEsqP8Rsjsh/eee2VCz0aXkyinbX/LqIjUm/OxZerHMua', 3, 260, NULL),
(195, '18056', '$2y$10\$cdD3x5cvsPyM3N1.SYs6w.bxMsvicEw9bH6IrFUbKlzST3IL/uvMC', 3, 261, NULL),
(196, '15033', '$2y$10\$IQD2hnyugMWarJPPQ31waO.F.uJZLf75nD6mdrSwMMmxxkhEstU4C', 3, 262, NULL),
(197, '16872', '$2y$10\$5ojvtYYMu3W6iI77l1FnpOIMgshN.X9bz0ODBZ5v1nkT1x8vK061W', 3, 263, NULL),
(198, '18824', '$2y$10\$APQlmPUBuJKyxC5P49es6.Y0D5EZQMeCwdIkx7.1yGDK5gP0H7OMS', 3, 264, NULL),
(199, '11390', '$2y$10\$CGsUQm6Hqoqfas9P7C1n8.K7hhKlCCeIOw4JmZ/v9ho7ZHOeK2nLm', 3, 265, NULL),
(200, '16215', '$2y$10\$v.NavodxmK3aSHBF.sK5nuN5Nil8hcKFaqnIjcZ0LMKfErm53Hk1a', 3, 266, NULL),
(201, '18194', '$2y$10\$ekhb9zzGAyt9hHZTy.j06e5n3zKY28oJN94g7BKcQh0qgaxo54Izi', 3, 267, NULL),
(202, '15923', '$2y$10\$Y1ZsYRDRlreGqHToVI118uYrRJ8mdksr9JMxO50uXD1VPO9bWqfcu', 3, 268, NULL),
(203, '13855', '$2y$10\$PyQnjcttcX.JDnf/Q7xQyuRRIauK7LXjHSgqStvWX2qiV.Q40uIFy', 3, 269, NULL),
(204, '16366', '$2y$10\$3i5enkHMAembpeuIUdBNQeSACkPejMx1ULJYoqVB3GS97IpsAMjLK', 3, 270, NULL),
(205, '19759', '$2y$10\$09n3u6FR5Ayf6eb3mobuGez/ZioEdRnWTypmzjSO..fzS4H.QMURu', 3, 271, NULL),
(206, '15047', '$2y$10\$DqkaS4sxv1UcOkrtRM2zmuW/ApNMp4G7/ue33HxkyMloH4eRXSudS', 3, 272, NULL),
(207, '10184', '$2y$10\$lMEXRenCYLALOIsReGO7AuO54HyCn.YyYKNrQBsldfXkhSlEyhvxC', 3, 273, NULL),
(208, '17902', '$2y$10\$rhLzbQ9v8un3GVtXt5mvXewUfLiqFcEub4J3QNHxwsM8UmKk46LM6', 3, 274, NULL),
(209, '17096', '$2y$10\$zVy7mBBKDZY1XCuHIhxuIuTn8AOkSjI4ZT5cl1nnpthF8ztdPALp2', 3, 275, NULL),
(210, '10553', '$2y$10\$UW9KqV6MQlBVKiPP65FafeeUCj0HXcmP4i2AcLbY9jWyNu5dsM4OO', 3, 276, NULL),
(211, '16298', '$2y$10\$8W1XjKyi/vidwJr0l4PdB.n2KulcMhL7W/yqOqV.JUnsUZtpTASnC', 3, 277, NULL),
(212, '12911', '$2y$10\$xEcpHHx5wPkwRc.ppNGplu3PXl2QWPk5YsXboPHOC7yanRauYUcfe', 3, 278, NULL),
(213, '19406', '$2y$10\$a.ONoTuhRKAZWbEi/EPWGe.DjLHqlxSPs6oVJhxOIZjWpI2dVXocC', 3, 279, NULL),
(214, '17662', '$2y$10\$SnZUVBeIOHtYuDImb0tMqOMh7Top2QvvdJ19XBY8XAtN4.G8rGFhW', 3, 280, NULL),
(215, '15642', '$2y$10\$Yjr0msAJSCZTM3DZk8QK2.zKi8WyOFtuRIyyGjiElCTSM1Q694YUS', 3, 281, NULL),
(216, '12863', '$2y$10\$eaJM/2vdu36m0wlj1ccc6ON2fF1t7mzAVp/cV2wS3FY.fsTMsa5hq', 3, 282, NULL),
(217, '12227', '$2y$10\$UNVjw8slH8FNS4bzK4rpouiv4d3DRDF88UdSoBWezG9/UnoHlJf8u', 3, 283, NULL),
(218, '15990', '$2y$10\$nUvwyKA.ZwnazZkuXii8WOerYBC5A2jC2c2LP6JrS71hRJrqXp77a', 3, 284, NULL),
(219, '13883', '$2y$10\$BziZ4h5l7p32XTj37U8weOb/XDLJ46p6Wp7XpdFzk8ZqBYyCyxAdm', 3, 285, NULL),
(220, '17488', '$2y$10\$bsUe0kJtoltgD/myXZsRL.COMy98seSvtQagidTlo6IUUi95Rq5hK', 3, 286, NULL),
(221, '15715', '$2y$10\$9pIrCZ/uFsZnq584JDASHOfmf.pFpK86qsMMhEbQQ1nFFWbD8zRT2', 3, 287, NULL),
(222, '19445', '$2y$10\$ulP/oMeBDzahKYfsLAcaWOppRpzeb.f5s6XVgPGJi4AHBivIfPeha', 3, 288, NULL),
(223, '10469', '$2y$10\$8owkgAXG2r5aJ.sw.mYvHu5V47JfeSQSo2B.Fyh.UqV9bPgEm.Wey', 3, 289, NULL),
(224, '19918', '$2y$10\$P6iBAutFbuOfs9KthTCRoudhzNgrEuQhdSpq43s4hOxjId3RBSrCe', 3, 290, NULL),
(225, '13273', '$2y$10\$HAmg7NtkKD9NB96EChDWtO.uSO8Lcl4L5iUu3hB12S0ROctRCQ0pi', 3, 291, NULL),
(226, '10390', '$2y$10\$mdDFS6fPx0Fvz6Qbjch0sOVbODLwpHOjGM2jpNgQl1R5plgGRbNHO', 3, 292, NULL),
(227, '16129', '$2y$10\$cSR3GsfRa2u5AcrjCfctlO16c3ca0N43v8boE0uR//owvPJtVjXGa', 3, 293, NULL),
(228, '18251', '$2y$10\$JXqSB6cGfJOV.ccwrV3Aq.n.3XvNy2rbEa84jL2OK.nKLONp/uTTK', 3, 294, NULL),
(229, '11203', '$2y$10\$LNxyA4557Uccf3a83HAAzOJr/Lc9x/Ah/yUBwZITtQafE83bwDzuy', 3, 295, NULL),
(230, '13642', '$2y$10\$e7cdevauUFcTOSdcWfMDCedvb77HJfAzFZsCLU7mU23n5DRG3xk2C', 3, 296, NULL),
(231, '12717', '$2y$10\$tFswlIc9wT.QYhNCxiStqeO1G1IIkTUkfz5IDJXVfF8qwojLcYR2K', 3, 297, NULL),
(232, '15882', '$2y$10\$C0Js9TPzwSmtv3blUquhOelGe4IyzSvY.YOWOWZbeIYr4jUR0XIOC', 3, 298, NULL),
(233, '18610', '$2y$10\$6mIBJEUiyV.AKHOAGAhi1uAD0BDIKbaIyZ/kRscGc7Wqgn3NZVGkq', 3, 299, NULL),
(234, '11602', '$2y$10\$JT9ejGD.vzlC7AhqaQtSlOD5Os0AV/uBmVnxO3BmypWI7JovORrQm', 3, 300, NULL),
(235, '11668', '$2y$10\$kHPEWQ/jhJYKhg.2qN2aZ.K1MWwypwPuM6yXwGGwYgOO1rB.JaXXC', 3, 301, NULL),
(236, '18968', '$2y$10\$73HR7rKF0wKz7KWUo1lSh.nG0vgxp4dfRNz08PtC.SExZNzhjnqi6', 3, 302, NULL),
(237, '16805', '$2y$10\$PbE9dBggkFlhaBd3FPfYq.brHqb0aiPgXEwJccVA9JAaADJh2MKdC', 3, 303, NULL),
(238, '10475', '$2y$10\$HcD81csc2NDF/udp8V8iTe84ZwA8BuL7F/FKyWI4r.Ixfr5ANkLgm', 3, 304, NULL),
(239, '15880', '$2y$10\$EA6p9FVmOeBODAklvHfIbO2hD5MCNcYslqig3lP7QpbIgdNzdPmG2', 3, 305, NULL),
(240, '16231', '$2y$10\$B3z2f0qCWjmHANscI3ttxedBIaw6AXPXDbC0acscU9DSVWzg0Fyee', 3, 306, NULL),
(241, '17807', '$2y$10\$/moWQ9L5GON8XuRg4GGOR.LZWcYL/HRlR1JZPqSp9ilT2vN5fNPPy', 3, 307, NULL),
(242, '16929', '$2y$10\$S0MfL8eAdifDGEF..82p1uLeFJPtJu5qupgbzw1UwuSIwoty7EEPK', 3, 308, NULL),
(243, '13231', '$2y$10\$Dy/MJ3VXMuO2rvxKbItxpurxjP/LH6knDXfddUNI5s3snAEcVFqau', 3, 309, NULL),
(244, '14568', '$2y$10\$0bX7kLnWsPizFoDlIVGRLem9cIKvVscw1IImuNKR5uV9.PX0ZimL6', 3, 310, NULL),
(245, '11377', '$2y$10\$RzVvEHdI/rr8mDzLZoWjiO1s1WIcwCF2IbRGI599cAtI/jFyrzIP2', 3, 311, NULL),
(246, '12158', '$2y$10\$Up9b/CV71X7xyuOVGWdPu.lXseKdb0k2OjTLPUh6Zsi499OU543q2', 3, 312, NULL),
(247, '10248', '$2y$10\$26WtNN67Ma0IBucrM64i2O//Ml9oGVXVwUJ55kfuWwQzcdqFxe2Pa', 3, 313, NULL),
(248, '10804', '$2y$10\$ktce3GGz1HbAzDhwCAreDOU4TeSGd4vjRP6gn0JIIGizWVMSl3/4W', 3, 314, NULL);";

if ($db->query($sql) === TRUE) {
	echo "Success";
} else {
    echo "failed" . $db->error;
}
if ($db->query($sql1) === TRUE) {
	echo "Success";
} else {
    echo "failed" . $db->error;
}
if ($db->query($sql2) === TRUE) {
  echo "Success";
  header('Location: http://localhost/student-project-allocation-system/adminDashboard/testing.php');
} else {
    echo "failed" . $db->error;
}
$db->close();
?>