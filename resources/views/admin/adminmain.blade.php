@extends('admin.manager')

@section('content-admin')
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">2,222,222</div>
                    <div class="cardName">Daily Views</div>
                </div>
                <div class="iconBox">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">2,222</div>
                    <div class="cardName">Sales</div>
                </div>
                <div class="iconBox">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">2,222,222</div>
                    <div class="cardName">Comments</div>
                </div>
                <div class="iconBox">
                    <i class="fas fa-comment"></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">$2,222,222,222</div>
                    <div class="cardName">Earning</div>
                </div>
                <div class="iconBox">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
        </div>

        <div class="graphBox">
            <div class="box"><canvas id="myChart"></canvas></div>
            <div class="box"><canvas id="earning"></canvas></div>
        </div>

        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Star Refriegerators</td>
                            <td>$2,222</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Window Coolers</td>
                            <td>$2,222</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Speakers</td>
                            <td>$222</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>
                        <tr>
                            <td>Hp Laptop</td>
                            <td>$2,222</td>
                            <td>Due</td>
                            <td><span class="status inprogress">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Star Refriegerators</td>
                            <td>$2,222</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Window Coolers</td>
                            <td>$2,222</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Speakers</td>
                            <td>$222</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>
                        <tr>
                            <td>Hp Laptop</td>
                            <td>$2,222</td>
                            <td>Due</td>
                            <td><span class="status inprogress">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Customers</h2>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt="photo"></div>
                            </td>
                            <td>
                                <h4>Yuna<br><span>Vietnamese</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt="photo"></div>
                            </td>
                            <td>
                                <h4>David<br><span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt="photo"></div>
                            </td>
                            <td>
                                <h4>Mavid<br><span>USA</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt="photo"></div>
                            </td>
                            <td>
                                <h4>David<br><span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt="photo"></div>
                            </td>
                            <td>
                                <h4>David<br><span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt="photo"></div>
                            </td>
                            <td>
                                <h4>David<br><span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt="photo"></div>
                            </td>
                            <td>
                                <h4>David<br><span>Italy</span></h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="customersPg">
            <div class="cardheader">
                <div class="card">
                    <h2 class="adminCpg appear">
                        <a href="" onclick="toggleAdminAppear()">Admin</a>
                    </h2>
                    <h2 class="userCpg">
                        <a href="" onclick="toggleUserAppear()">User</a>
                    </h2>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <td class="toolstitle">Admin Tools</td>
                        <td>Creation Date</td>
                        <td>Avatar</td>
                        <td>User Name</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="repair">
                            <input type="submit" value="REPAIR">
                        </td>
                        <td class="delete">
                            <input type="submit" value="DELETE">
                        </td>
                        <td>06/10/2021</td>
                        <td>
                            <div class="avt"><img src="" alt="photo"></div>
                        </td>
                        <td>HanatashiYuna</td>
                        <td>hanatashiyuna.1406@gmail.com</td>
                        <td>abc</td>
                        <td><span class="status Uactive">Active</span></td>
                    </tr>
                    <tr>
                        <td class="repair">
                            <input type="submit" value="REPAIR">
                        </td>
                        <td class="delete">
                            <input type="submit" value="DELETE">
                        </td>
                        <td>16/12/2021</td>
                        <td>
                            <div class="avt"><img src="" alt="photo"></div>
                        </td>
                        <td>Yun</td>
                        <td>yun@gmail.com</td>
                        <td>abcd</td>
                        <td><span class="status blocked">Block</span></td>
                    </tr>
                    <tr>
                        <td class="repair">
                            <input type="submit" value="REPAIR">
                        </td>
                        <td class="delete">
                            <input type="submit" value="DELETE">
                        </td>
                        <td>16/12/2021</td>
                        <td>
                            <div class="avt"><img src="" alt="photo"></div>
                        </td>
                        <td>Yuki</td>
                        <td>yuki@gmail.com</td>
                        <td>abce</td>
                        <td><span class="status blocked">Block</span></td>
                    </tr>
                    <tr>
                        <td class="repair">
                            <input type="submit" value="REPAIR">
                        </td>
                        <td class="delete">
                            <input type="submit" value="DELETE">
                        </td>
                        <td>16/12/2021</td>
                        <td>
                            <div class="avt"><img src="" alt="photo"></div>
                        </td>
                        <td>Yuno</td>
                        <td>yuno@gmail.com</td>
                        <td>abcf</td>
                        <td><span class="status Uactive">Active</span></td>
                    </tr>
                    <tr>
                        <td class="repair">
                            <input type="submit" value="REPAIR">
                        </td>
                        <td class="delete">
                            <input type="submit" value="DELETE">
                        </td>
                        <td>16/12/2021</td>
                        <td>
                            <div class="avt"><img src="" alt="photo"></div>
                        </td>
                        <td>Yune</td>
                        <td>yune@gmail.com</td>
                        <td>abcg</td>
                        <td><span class="status Uactive">Active</span></td>
                    </tr>
                    <tr>
                        <td class="repair">
                            <input type="submit" value="REPAIR">
                        </td>
                        <td class="delete">
                            <input type="submit" value="DELETE">
                        </td>
                        <td>16/12/2021</td>
                        <td>
                            <div class="avt"><img src="" alt="photo"></div>
                        </td>
                        <td>Yuumi</td>
                        <td>meopho@gmail.com</td>
                        <td>abch</td>
                        <td><span class="status Uactive">Active</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection
