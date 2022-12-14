SELECT 
        DBA.USERNAME,
        UM.PASSWORD
FROM 
        DBA_USERS DBA
LEFT JOIN
        DBADMINS.USER_MASTER UM
ON
    DBA.USERNAME = UM.USERNAME
WHERE 
        DBA.USERNAME = :username
        AND UM.APPLICATION IN ('ORMS', 'OREIM', 'ORPM')
        AND UM.DB_NAME = :db_name