# MyTubeアプリ

YouTubeで見つけたお気に入りの動画に、コメントを残して保存するアプリです。

## データベースセットアップ手順

```sql
CREATE DATABASE mytube_db;

CREATE USER mytube_admin IDENTIFIED BY '1234';

GRANT ALL ON mytube_db. * TO mytube_admin;

CREATE TABLE videos (
	id INT PRIMARY KEY AUTO_INCREMENT,
  	title VARCHAR(255) NOT NULL,
  	video_id VARCHAR(20) NOT NULL,
	review VARCHAR(255) NOT NULL,
	created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO
    videos
    (title, video_id, review)
VALUES
    ('Ed Sheeran - Shape of You', 'JGwWNGJdvx8', '53億回再生！'),
    ('Billie Eilish - bad guy', 'DyDfgMOUjCI', '何回も聞いちゃう'),
    ('BTS - Dynamite(Choreography ver.)', 'BflFNMl_UWY', 'このバージョン好き！'),
    ('やる気を全開にさせる最強洋楽メドレー2021', 'GmOO1wSGwhY', 'めちゃくちゃ元気がでる！'),
    ('Hip Hop Mix 2020', 'bImx3tpGR5w', '聞きすぎて耳がキーン'),
    ('Pop rnb chill mix', 'mV8N-V8F9j8', '好きすぎる。。。');
```