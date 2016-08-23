CREATE PROCEDURE `pro_catesWithSubCount` (pid INT)
BEGIN
	DECLARE cid INT;
    DECLARE cname VARCHAR(255);
    DECLARE cparent_id INT;
    DECLARE csort_order INT;
	DECLARE no_more_rows TINYINT(1);
    
    -- CREATE CURSOR
	DECLARE current_row CURSOR FOR SELECT id, name, parent_id, sort_order FROM shiyi.sy_categories WHERE parent_id = pid ORDER BY sort_order ASC;
	-- ANNOUNCE THE CONDITION OF LOOP END.
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET no_more_rows = 1;
    SET no_more_rows = 0;
    
    OPEN current_row;
		REPEAT
			FETCH current_row INTO cid, cname, cparent_id, csort_order;
		UNTILE no_more_rows;
        
    CLOSE current_row;
END
