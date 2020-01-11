# CloudMQTT
[CloudMQTT](https://www.cloudmqtt.com/) menggunakan server Mosquitto (server yang menggunakan protokol telemetri transport untuk menyediakan layanan pertukaran data IoT menggunakan model publish/subscribe atau message queue) yang termanage untuk tujuan komersil dan gratis bagi pengguna non-profit.


![publisher-subscriber](https://user-images.githubusercontent.com/50950100/72207021-16919f80-34c7-11ea-8745-2fbfaf8a2618.jpg)

# Instance
Instance dibuat secara otomatis setelah user menyelesaikan proses sign up dan user dapat melihat detail dari instance, seperti misalnya informasi koneksi dan halaman detail. Nanti user juga akan diarahkan untuk memformat URL koneksi ketika menghubungkan alat dan client libraries, bentuk umum URLnya seperti `mqtt://user:password@server:port` 

<img width="1417" alt="instance-details" src="https://user-images.githubusercontent.com/50950100/72207123-2b226780-34c8-11ea-8684-e638b8482d87.png">

# Requirements
* Data yang masuk CloudMQTT berupa JSON
* Mysql Database

# Referensi
Project ini dibuat berdasarkan referensi [CloudMQTT GitHub](https://github.com/CloudMQTT)
