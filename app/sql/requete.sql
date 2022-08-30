CREATE TABLE sac_postauxes(
    id INT(50) NOT NULL  AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    ulds_id VARCHAR(50),
    PRIMARY KEY(id_sacPost)
     FOREIGN KEY(ulds_id) REFERENCES ulds(id) ON DELETE CASCADE ON UPDATE CASCADE
)

CREATE TABLE ulds(
    id INT(50) NOT NULL  AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    date DATE,
    hour TIME, 
    Origine VARCHAR(50),
    ActualArrival DATETIME,
    Registre DATETIME,
    MRDLocation VARCHAR(30),
    Handler VARCHAR(20),
    MRDLabel VARCHAR(20),
    RegistCarrier VARCHAR(10),
    RegistFlight VARCHAR(10),
    AttributedCarrier VARCHAR(10),
    AttributedReceptacles VARCHAR(10),
    Weight DOUBLE NOT NULL,
    PRIMARY KEY( id),
   
    )