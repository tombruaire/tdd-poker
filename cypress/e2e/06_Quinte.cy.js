describe("POKER", () => {
    it("Test - Quinte", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('9Cœur');
        cy.get('select#main_carte2').select('8Trefle');
        cy.get('select#main_carte3').select('7Pique');
        cy.get('select#main_carte4').select('6Carreau');
        cy.get('select#main_carte5').select('5Cœur');
        cy.get('button#btnJouer').click();
    })
  })