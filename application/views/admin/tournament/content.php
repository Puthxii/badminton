<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        กำหนดสายการแข่งขัน
        <small>walailak university</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- <div class="box-header">
              <h1 class="box-title">รายชื่อผู้เข้าแข่งขันรุ่น: รุ่นระชาชน ประเภท: มือ N</h1><br/>  
            </div> -->
            <main id="tournament">
                <ul class="round round-1">
                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">อควาเรียส <span>79</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">อีโวล <span>48</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">มิส <span>84</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">บุรีรัมย์ <span>72</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top ">พืชสีเขียว <span>55</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom winner">เบยอน <span>68</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">อามเมอรี่ <span>64</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">เดเทรต <span>44</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">โกลเดน แคท <span>54</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">ลูซิท ดรีม <span>52</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">เมอรินมอ <span>65</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">เมดอินไทยแลนด์ <span>54</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">เพอเพวมูส <span>67</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">Cincinnati <span>63</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">ชาบเปอร์ <span>73</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">Albany <span>61</span></li>

                    <li class="spacer">&nbsp;</li>
                </ul>
                <ul class="round round-2">
                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">อควาเรียส <span>82</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">มิส <span>56</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">เบยอน <span>74</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">อามเมอรี่ <span>57</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top ">โกเดน แคท <span>48</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom winner">เมอรินมอ <span>70</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top ">เพอเพวมูส <span>50</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom winner">ชาบเปอร์ <span>66</span></li>

                    <li class="spacer">&nbsp;</li>
                </ul>
                <ul class="round round-3">
                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">อควาเรียส <span>77</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">เบยอน <span>69</span></li>

                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top ">เมอรินมอ <span>61</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom winner">ชาบเปอร์ <span>71</span></li>

                    <li class="spacer">&nbsp;</li>
                </ul>
                <ul class="round round-4">
                    <li class="spacer">&nbsp;</li>
                    
                    <li class="game game-top winner">อควาเรียส <span>85</span></li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom ">ชาบเปอร์ <span>63</span></li>
                    
                    <li class="spacer">&nbsp;</li>
                </ul>       
            </main>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <style>
        /*
      *  Flex Layout Specifics
      */
      main{
        display:flex;
        flex-direction:row;
      }
      .round{
        display:flex;
        flex-direction:column;
        justify-content:center;
        width:200px;
        list-style:none;
        padding:0;
      }
        .round .spacer{ flex-grow:1; }
        .round .spacer:first-child,
        .round .spacer:last-child{ flex-grow:.5; }

        .round .game-spacer{
          flex-grow:1;
        }

      /*
      *  General Styles
      */
      /* body{
        font-family:sans-serif;
        font-size:small;
        padding:10px;
        line-height:1.4em;
      } */

      li.game{
        padding-left:20px;
      }

        li.game.winner{
          font-weight:bold;
        }
        li.game span{
          float:right;
          margin-right:5px;
        }

        li.game-top{ border-bottom:1px solid #aaa; }

        li.game-spacer{ 
          border-right:1px solid #aaa;
          min-height:40px;
        }

        li.game-bottom{ 
          border-top:1px solid #aaa;
        }
    </style>
</div>
    <!-- /.content-wrapper -->