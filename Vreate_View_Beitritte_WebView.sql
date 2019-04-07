SELECT        dbo.LiOST_LeGS.LeGs_Eingabe AS LeGS, dbo.LiOST.Gruppe, dbo.LiOST.Beitritt, dbo.LiOST.Beitrittsdatum AS von, dbo.LiOST.Beitrittsende AS bis, dbo.LiOST.Vertrag, dbo.LiOST_LeGS.Bezeichnung, dbo.LiOST.Kommentar, 
                         dbo.LiOST.KK_Name, dbo.Companies.Company AS Firma_1, dbo.Companies.Company2 AS Firma_2, dbo.Companies.Company3 AS Firma_3, dbo.LiOST.ID AS ID_Beitritt, dbo.Companies.ID AS ID_Firma
FROM            dbo.LiOST INNER JOIN
                         dbo.LiOST_Gruppen ON dbo.LiOST.ID_Gruppe = dbo.LiOST_Gruppen.ID INNER JOIN
                         dbo.LiOST_LeGS ON dbo.LiOST.ID_LeGs = dbo.LiOST_LeGS.ID INNER JOIN
                         dbo.Companies ON dbo.LiOST.ID_Mitglied = dbo.Companies.ID