CREATE TABLE todos (
    id INT NOT NULL AUTO_INCREMENT,
    is_doon BOOL DEFAULT false,
    tittle TEXT,
    PRIMARY KEY (id)
);

INSERT INTO todos (title) VALUES ('aaa');
INSERT INTO todos (title) VALUES ('bbb', true);
INSERT INTO todos (title) VALUES ('aaa');