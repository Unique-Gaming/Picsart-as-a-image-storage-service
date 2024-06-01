<?php

$email = ""; // Picsart Account Email
$password = ""; // Picsart Account Password

$access = 'https://api.picsart.com/gw-v2/users/auth/signin';


$access_head = [
    "Content-Type: application/json",
    "Accept: application/json",
    "User-Agent: Picsart-25.0.1",
    "Accept-Encoding: gzip, deflate, br",
   "segments: 00e576b6-ce88-4193-a912-6c94a47decba,00rm,01a9,0282,0381,03b0,05nl,076e,07d5,081f9f7e-aeb8-46f9-a5d0-b0d81a212193,09069121-fc8e-4f06-8aa7-7ae385a11fb1,0915,0a14,0b0bff0a-18c7-467d-8cc2-824f7919f908,0b0ea5e1-9f58-478f-b907-544170fefdbf,0c23,0dc5,0dc6,0ddb,0gir,0ic3,0jb1,0jly,0pgc,0q6m,0r5c,0rek,0w7t,10c981fd-3e71-4d9f-9143-cc722ec17f2c,10ce,112b,1281,1374,13d9,141a,14ce,14r9,158c,1593,160a,16dc,16e1,1745a6c3-6292-48d5-9c82-c898f4ffba73,17ee,18d3,18gy,18ym,1916,1941,19823be9-7bec-4364-af58-7daa99df98be,19f4,1a04,1b88,1bbd,1bc5,1bcc,1c2f,1d7c,1dee,1e40,1e43,1f94,1fi5,1jd2,1k6u,1o0a,1pt3,1wc6,1y4a,2029,2189,22ac471f-111a-4dc8-865c-8d80a8f8638b,2403,2417,243a,245a,24f9,24vo,2577,2677048d-3ace-43a4-ab7b-1239975a01a2,26a6,26c7555f-56a1-47aa-a88c-7f4d122ae58c,288b,28bo,28d45094-4672-4038-baa3-55af073aee54,2945,29c0,2a91,2b5a0b15-5f33-4e8f-a85b-6fa344de92e4,2b9c,2c27,2cdf,2df0,2ec5,2f3c,2f3x,2gef,2irq,2ivd,2klq,2m24,2s4m,2umt,3089,30cb,3138,316d,3231,3249,32to,339b,33d98dd5-2577-450e-8bf2-e0fb58286344,3443,34a3,34c0,34cb,34f0,3542,357b,367e,37a1,37d7,38ee,3a49,3ad1,3dpu,3f44193c-4baf-44fd-8da1-f0717a3bc22e,3f50,3f5d,3f8f,3fbd,3gg4,3h5b,3j57,3jdz,3lez,3mmp,3qzy,3rkd,3rxi,3sl7,3xjb,3yq1,4048,41y5,42fd,440c,4469,454a,4560,45wp,463e,46a4,47ab,4b3s,4b66,4c3a,4cef,4d7aaf27-e8c8-4f98-ab14-77630c64285e,4don,4dyf,4i0j,4lr2,4ofo,4rj5,4t1o,4xsy,4yvx,4zlg,50091a26-c10e-41b4-b4fd-30a41f3bcfc2,5048bac3-0db5-42ff-bd9c-b706606ec378,508a,50a3,50dd,50qr,5195,52a4,52e7,532f,53a3,54bd7f98-6d33-4df8-8f04-221d0507baea,55a3,567b,57ce,57de,582d,5836,589n,58d6,5a83,5a8a,5ayk,5bd4,5bfeabe6-495d-4085-b9a2-fb40fe22bbb7,5brx,5c27,5c59,5d5c,5d8c,5doo,5ec8,5l74,5mp9,5oen,5r02,5r7c,5sru,5szp,5us0,61b7,61ch,62rq,633b,643a,649f,6549,66d9,6762,682a,6ad0e62d-806a-451f-90e2-a77d8e0bb6c5,6aef,6b13,6bb4,6c413843-40a4-43dd-a719-0e5bad2f5dc0,6c69,6dac,6eyo,6f6ce6da-6ab8-4e97-adb4-05801d92f226,6fab,6fd8,6i1n,6joo,6k2c,6k8l,6v3q,6wpo,7003,7023,7033,7140,717d56a4-2f31-4c09-946c-9f0929f7a5ec,7252,7295,735b,73se,77a0,77a9,7a98,7c6p,7d41,7kgs,7l6y,7vgd,7vta,7xnd,80a9,80i3,80t4,824h,82b8,83v5,851b,8526df8a-4074-4847-ace3-31a0a984439e,8548e689-faf9-4df0-a9a9-c5cd9f58372f,855c,85c1,85fb,8755,8763,87a8,87f2,88qg,892b,89p6,8aad,8ad991b3-137e-4730-bb78-75384cba8e42,8bbd0f0a-8c6c-4db7-bf00-3ea70d8f1bff,8bfa,8d55,8e18,8f1b2f5d-870c-4ced-b3ab-5a5e2b74a4dc,8f576265-3ba0-48cb-94be-a12733cf172c,8f8dd9fe-020d-4d56-a858-ccf529b435ad,8gzn,8muu,8q4l,8qdl,8sw6,8w8r,8xc2,8y01,8zlx,9091,9181,9196,91bi,92ec,9375,9454,9483,94e8,94l3,9568,956a,9591,9764ca26-62ac-4257-a8ca-bedecbcf1d35,977d,97fda057-c74f-4cfe-bc94-fc0122ffeddc,97ti,994bf372-7d61-401c-9bde-e771eeaf7a38,9b38,9b6f,9b97,9bfb,9ce432e5-285b-4afd-abc3-3b92336f13fb,9eb8,9h0i,9krd,9mnr,9ny5,9nyb,9s9g,9tli,9x65,a041,a12b,a1b62e93-2125-474c-985a-60e78b3f2549,a1ou,a2d1,a342,a353,a3cd,a3i7,a402,a404,a489,a69e,a6ee,a81f956d-607f-4d3b-9812-923e5110881d,a971,a9be,a9c9,a9e5,aafc,ab00,ab0a,ac08,ac19,ac4efc9c-7042-4795-81f0-409fa28c6b92,ac62,aca6,acc4,accf,ad66b4f3-968b-4cbf-99fc-f73a5dfe29a8,add2,ae3bac6c-e47c-4599-a758-52d4edbefc08,aea8,af1e,af1f,af41e0ad-16da-4040-abe3-719199e41529,afa8,aija,amf3,anvg,aoi8,aoro,ap3u,aq4t,aq8u,arbp,azg1,azp3,b016,b041,b090,b0d1,b32j,b4si,b4yw,b61a,b699,b736,b875,b89b,b930,b976,ba2f,bb2c,bb50,bb6d,bb72,bb9bf6dd-84ae-4d14-93c7-00ae30291726,bbce,bc29c500-d773-4e13-b2ab-d3aa95593c2e,bd1b,bd9s,bdd2,bdd9,be3c,be84,becs,bf2b,bf9f,bi0c,bnfd,bruv,bus1,c0n6,c0nz,c113,c1c2,c22d,c3ae,c3c9,c3rn,c408,c43a,c457,c4sx,c552,c600dd50-af6b-4eb2-b84e-b4c543ea2305,c774,c785,c847,c8cd,c939,ca04,cbc4,ccae,ccfc,cdkv,cdrt,ce8e,cezw,cf8e,cjdt,cjvp,cl53,clbp,clvg,cn8u,cp0r,cp54,cpo0,ctnv,cum4,cwcq,cwxf,czji,d020d569-b5e9-4db5-a5fc-171a552da9dc,d0ed,d1b49605-bff5-4e5b-b7c1-8ff361bddebc,d1b9,d1d3,d1sj,d23576ba-d331-4db8-98c9-3723000b0828,d257,d265,d462,d4fa,d5e1,d61917e8-6f5e-4122-9696-3c90e78ad4ab,d64d,d6d3,d78d,d888,d8cbce5f-8444-4f75-9d55-677a5b50b71a,d8f9,d8y9,d9ab,daln,db1d,db71,dc41,dcdee362-9f75-45e0-a945-76b8f539567d,dd18,dd6g,dego,dfc3,dh0r,dm8h,duy9,dxbe,dxw4,e1vw,e6f5,e7a4,e7xk,e803,ea58,ea7ef231-a856-4508-bdac-415a293eca3c,eb1f7bf9-8956-499c-ac50-c1cdccdd5ffa,eb85,ebc8,ede1,ee0a,ee25,ee6c,ee9a,eee2,ef42,eh3i,ej61,ekux,el4y,el9k,ey6g,f0c4,f1ef,f212,f281,f2xa,f375,f3ac,f444,f6xw,f716,f7e5,f826,f82a,f869,f87e,f883,f8a3,f93q,f9sx,fasa,fb5o,fba0,fbad,fbb9,fbee,fbf0c492-daf4-4a6a-af77-92a6b990fc3e,fbl6,fd4a,fdyk,fec3,ff7e,fg7c,fig9,flmu,fmxd,fnnx,fozo,fpwv,fqez,fqmu,fsl4,fxom,g3dg,g3yd,g5hr,g6v4,gapz,gc9p,gd6q,gdnd,gf0b,gmhc,gpjd,gtlw,gyit,gyza,h1op,h226,h9h8,hclf,hj2b,hj6y,hkph,hohd,hp32,hr0y,htcm,hv76,hwed,hxfe,hyg8,hzun,i4ry,i7kf,i8bw,iai1,ife9,ijsy,ip35,ip71,iu4k,ixhx,j04y,j33m,j3an,j4qw,jd76,jhw4,jjvf,jkdl,jnwx,jw39,k38d,k58b,k8hx,kdmz,kfbv,kfjt,klfl,klgz,kpib,ktm9,kup3,kyfj,kyg4,l6mn,ldco,lkbj,lo99,lolz,lv7f,lxkj,m1rk,mbd8,mfrm,mh26,mhz7,mou1,mpok,mur0,mwwn,mzbn,n0ok,n22v,n2v8,n4t7,n6po,n91r,nanm,nb4w,nc3t,nh61,nokt,noq5,np6z,npem,nq5m,nr2h,nst9,nvco,nvw9,nwbd,nyex,nyzz,o0k0,o1da,oawy,oc45,oe4z,oenk,oiy4,oknw,onmo,osld,ou3v,p396,p4lj,p55y,p91a,p9vl,pc0m,pehx,pk6r,poyp,prsc,pvx8,pxz8,pymz,q4v0,q6df,q940,qa06,qapa,qec9,qf5w,qfcy,qmym,qrke,qt50,qtf6,qud5,quhc,r39n,r8d8,r8m3,r9a7,rbi1,rji6,rk9v,rpol,ruue,rzmj,s1ii,s28d,s4ok,s913,scx3,siar,sjro,sl86,sm84,sql4,ssq6,sujs,suqs,swi4,sx7g,t3vj,t4qs,t50x,t5nr,t8oz,tfht,tgh2,tgrf,thrg,tibk,tkco,tlu8,tthl,tuu6,txh0,u75k,u7xk,u926,u94l,ucxm,uflv,ujqj,ukfm,ulwz,urwv,uscr,uvhm,uysy,uzmh,v0ko,v0p9,v2hr,v3wq,v4ai,v53i,v5t7,v7ao,v8mx,v9kz,v9mn,vc0e,vdrr,vdx7,ve6d,venu,vfc0,vhsj,vkbi,vlry,vn28,vp2n,vpvy,vuu0,w0dc,w4xn,w6ho,w6kr,w7lu,w9tp,walt,wch2,wd23,wfts,wg86,wkho,wle3,womg,wr4y,wrlb,wrtk,wtlh,wtxq,wxj8,wxsl,x2m3,xbew,xf7s,xfu2,xj9o,xm43,xmul,xq1u,xsec,xvxd,xzam,y1qm,y7yg,yc3e,yc8l,yf6q,yme7,yn2o,yri6,yrj9,yw9u,yx9e,yy3w,z18c,z1bs,z7q2,zag1,zfbf,zftu,zrk9,zszm,ztrk,zwi4,zzhi,zzi2",
    "x-app-authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6Ijk3MjFiZTM2LWIyNzAtNDlkNS05NzU2LTlkNTk3Yzg2YjA1MSJ9.eyJzdWIiOiJhdXRoLXNlcnZpY2UtYXBwbGUiLCJhdWQiOiJhdXRoLXNlcnZpY2UtYXBwbGUiLCJuYmYiOjE2ODc0Mjk4MjgsInNjb3BlIjpbXSwiaWF0IjoxNjg3NDQwNjI4LCJpc3MiOiJodHRwczovL3BhLWF1dGhvcml6YXRpb24tc2VydmVyLnN0YWdlLnBpY3NhcnQudG9vbHMvYXBpL29hdXRoMiIsImp0aSI6ImI0ZGM1NTMwLWMxMzgtNDMwZi1hYjY1LWEzMjQ2ZWJjMDVlNyJ9.Z2v343W1lCEkGAD3XzqxLf1c7xmtz24k_eD7lFAHGLT3zLr21shMQWiKu3LtjM2-XzKCkpHnt0FzQZKqt1PCSLYC0DB2hkXkNr3VcFKGxyL0Jmq5RstCvlib85nJz2pgAfKP8kea6mH_py-zTIP9q3P47INTh8mT5wd41gntAX0sXADiCaLncZiVt3obaeYG6EHvYGiQk0vDYdyAo25sF5BSj3ayzP-YWWOwRHZ_pSNoQ8J1BNN0ZGsLaiGlZszoXDhYTaNlVUVMd6y6oExhvVBDlTs_aQ9hwpBQ084qOBKJ5v8P6S91e_PGDfY7x_ISVemnBr8ydyAJWmA9_x5pxw"
];

$Half = mt_rand(10000000000, 99999999999);

$sec_half = mt_rand(1000000, 9999999);

$code = $Half . '-' . $sec_half;
$data = [
    "appsflyer_id" => "$code",
    "password" => "$password",
    "username" => "$email"
];


$json_data = json_encode($data);


$ch = curl_init($access);


curl_setopt($ch, CURLOPT_HTTPHEADER, $access_head);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate,br');


$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {

    if (isset($response[0]) && ord($response[0]) == 0x1f && ord($response[1]) == 0x8b) {
        $response = gzdecode($response);
    }
$accessdata = json_decode($response, true);


$access_token = $accessdata['token']['access_token'];


}

curl_close($ch);

?>
