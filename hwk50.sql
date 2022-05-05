create database hwk5;
use hwk5;
create table information (
	name		        char(32)  	character set utf8,
	child_entrance	    int(3),
    child_big3          int(3),
    child_free          int(3),
    child_year          int(3),
    adult_entrance	    int(3),
    adult_big3          int(3),
    adult_free          int(3),
    adult_year          int(3)
);
describe information;